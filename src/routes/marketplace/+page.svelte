<script>
	import Plugin from './../../lib/components/Plugin.svelte';
  import ComingSoonBlock from "$lib/components/ComingSoonBlock.svelte";
  import GlassPane from '$lib/components/GlassPane.svelte';
  import { onMount } from 'svelte';

  let userHasFd = $state(false);
  let connMessage = $state("Welcome to the Freedeck Marketplace. Here you can see the variety of plugins available to install.");
  let userPlugins = $state([]);
  let mktplace = $state({});
  let plugins = $state([])

  function heartbeat() {
    fetch("http://localhost:5754/api/discover").then((res)=>res.json()).then((res) => {
      userHasFd = true;
      connMessage = `Connected to ${res.title} v${res.version} on ${res.ip[Object.keys(res.ip)[0]][0]}. ${Object.keys(res.plugins).length} plugins installed.`
      userPlugins = res.plugins;
    }).catch((err) => {
      userHasFd = false;
      connMessage = "Welcome to the Freedeck Marketplace. Here you can see the variety of plugins available to install.";
      userPlugins = [];
    })
    setTimeout(heartbeat, 5000)
  }

  onMount(() => {
    heartbeat();
    fetch("/releases.json").then((res) => res.json()).then((res) => {
      if(typeof res.channels.main.catalog === "string") {
        fetch(res.channels.main.catalog).then((b) => b.json()).then((ar) => {
          mktplace = ar;
        }).catch((err) => {
          connMessage = err.toString();
        })
      } else {
        mktplace = ar;
      }
    }).catch(err => {
      connMessage = err.toString();
    })
  })

  $effect(() => {
    plugins = Object.keys(mktplace).map((key) => {
      let i = {id:key};
      i = {...i, ...mktplace[key]}
      return i;
    })
  });

</script>
<div class="content">
  <GlassPane>
  <h1>Web Marketplace</h1>
  <p>{connMessage}</p>
  <p>In the future, you will be able to manage your plugins from here! For now, it is just a listing.</p>
  <div class="plugins">
    {#each plugins as plugin}
      <Plugin 
      id={plugin.id}
      title={plugin.title}
      author={plugin.author}
      version={plugin.version}
      description={plugin.description}
      {userHasFd}
      repoTitle="freedeck.app"
      freedeckURI="freedeck://startup"
      installed={userPlugins}
      official=true
      downloadable = false
    />
    {/each}
  </div>
</GlassPane>
</div>
<style>
  .plugins {
    display: flex;
    flex-wrap: wrap;
    gap: 5px;
  }
  .content {
    margin: 1.5rem;
  }
</style>