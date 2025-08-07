<script>
  import '$lib/style/style.css';
  import '$lib/style/responsive.css';
  import Navbar from '$lib/components/Navbar.svelte';
</script>

<svelte:head>
  <meta charset="UTF-8" />
  <meta content="Freedeck" property="og:title" />
  <meta name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
  <link rel="icon" type="image/png" href="/assets/favicon-96x96.png" sizes="96x96" />
  <link rel="icon" type="image/svg+xml" href="/assets/favicon.svg" />
  <link rel="shortcut icon" href="/assets/favicon.ico" />
  <link rel="apple-touch-icon" sizes="180x180" href="/assets/apple-touch-icon.png" />
  <link rel="manifest" href="/assets/site.webmanifest" />
</svelte:head>

<Navbar />

<slot/>

<div id="footer">
  <center>
    <p>Freedeck is a project by <a href="https://github.com/ia74">ia74 / Aiden S.</a></p>
    <a href="/data" class="trapped">Data Collection Policy</a>
    <p>© 2024 Aiden S.</p>
    <img src="/img/logo.png" alt="Freedeck Logo" width="100" height="100">
  </center>
</div>
