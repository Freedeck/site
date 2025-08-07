<div id="header">
  <div class="navbar">
    <a href="/" class="nostyle">
      <center class="flex-wrap-row">
        <img src="/img/logo.png" alt="Freedeck Logo" width="100" height="100" />
        <h1>Freedeck</h1>
      </center>
    </a>
    <ul>
      <li>
        <a
          href="https://github.com/Freedeck/app/releases/latest/download/Freedeck.exe"
          >Download</a
        >
      </li>
      <li><a href="https://discord.gg/7gWrgyt7Aa">Discord</a></li>
      <li><a href="https://github.com/freedeck">GitHub</a></li>
      <li><a href="https://wiki.freedeck.app">Wiki</a></li>
      <li><a href="/marketplace">Marketplace</a></li>
    </ul>
  </div>
</div>

<style>
  
#header {
  position: sticky;
  top: 1.5rem;
  scrollbar-width: 0;
  margin: 1.5rem;
  border-radius: 1.5rem;
  display: flex;
  flex-direction: column;
  z-index: 3;
}

.navbar {
  display: flex;
  justify-content: space-between;
  align-items: center;
  position: sticky;
  border-radius: 1.5rem;
  padding: .5rem;
  border: var(--generic-border);
  background-color: rgba(45,45,50,0.25);
  backdrop-filter: blur(1.5rem);
}

.navbar ul {
  display: flex;
  gap: 1em;
  list-style-type: none;
}
</style>