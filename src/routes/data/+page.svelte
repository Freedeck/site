<div class="policy-wrapper">
  <div class="policy">
    <h2>Data Collection Policy</h2>
    <p><strong>Written Date:</strong> January 04, 2025</p>

    <h2>1. Introduction</h2>
    <p>
      Freedeck (“we,” “our,” “us”) is committed to protecting the privacy and
      security of our users. This Data Collection Policy outlines the types of
      data we collect, how we use it, and the measures we take to ensure your
      information remains secure.
    </p>
    <p>Freedeck does not and will not collect truly identifying information.</p>

    <h2>2. Definitions</h2>
    <ul>
      <li>
        <strong>Host:</strong> Refers to the Freedeck Host, the local webserver on
        port 5754 that hosts the full app.
      </li>
      <li>
        <strong>Freedeck:</strong> Refers to the Freedeck Companion, the desktop
        application that allows you to edit tiles.
      </li>
      <li>
        <strong>my.freedeck.app:</strong> Refers to the connection technology that
        allows users to connect to a Host with a simple code.
      </li>
      <li><strong>Freedeck.app:</strong> Refers to the website.</li>
      <li>
        <strong>Hostname:</strong> Refers to your device's local name (example: DESKTOP-XXXXX).
      </li>
    </ul>

    <h2>3. Using my.freedeck.app</h2>
    <p>
      When you encounter the first-time setup screen (for usage of
      my.freedeck.app) in Freedeck, you are given a consent screen that prompts
      that you will share:
    </p>
    <ul>
      <li>Your local IP address</li>
      <li>Your hostname</li>
    </ul>
    <p>with the Freedeck.app servers.</p>

    <h3>3.1. Explanation</h3>
    <p>
      my.freedeck.app requires your local IP address and hostname as they are
      used to transport your connection from my.freedeck.app to your local Host.
    </p>

    <h3>3.2. How It Works:</h3>
    <ol>
      <li>
        In Freedeck, you consent to your data being sent to my.freedeck.app.
      </li>
      <li>
        Freedeck generates a code (e.g., FRDEC) and provides my.freedeck.app
        with your local IP address and hostname.
      </li>
      <li>my.freedeck.app saves this data in a secure database.</li>
      <li>
        On your external device, you access my.freedeck.app and enter the code
        (e.g., FRDEC).
      </li>
      <li>
        my.freedeck.app retrieves your IP and hostname and displays them for
        verification. You confirm the hostname matches your computer.
      </li>
      <li>After verification, you press Connect.</li>
      <li>
        You are redirected to "http://(IP):5754" to access your local Host.
      </li>
    </ol>

    <h2>4. Data We Collect</h2>

    <h3>4.1. Data You Provide to Us:</h3>
    <ul>
      <li>
        Locally identifying information: For my.freedeck.app, you provide your
        local IP and machine hostname.
      </li>
      <li>
        Bug logs: Logs generated within Companion will solely ever be used to
        help fix bugs.
      </li>
      <ol>
        <small>These logs include:</small>
        <li>
          Style Configuration: Your left-sidebar and "Style" tab settings.
        </li>
        <li>
          Companion Configuration: Your audio device setup (only selected
          devices), theme, and other Settings flags
        </li>
        <li>
          Tile Configuration: Your tile setup (how they're arranged on the grid
          & their data)
        </li>
        <li>
          Plugin Configuration: What plugins you have installed, this includes
          their: Name, ID, Author, Description, Version
        </li>
      </ol>
    </ul>

    <h3>4.2. Data We Collect Automatically:</h3>
    <ul>
      <li>None.</li>
    </ul>

    <h3>4.3. Data from Third Parties:</h3>
    <p>
      If you use community-created Plugins from unofficial repositories,
      Freedeck cannot guarantee the safety of your data with third parties.
    </p>
    <p>
      All community-created Plugins on the <a
        href="https://releases.freedeck.app/index.json"
        >Official Freedeck Marketplace Repository</a
      > are vetted to ensure your data stays safe.
    </p>

    <h2>5. Handling Your Data</h2>
    <p>
      Your hostname will be used only to retrieve your bug-log submissions and
      my.freedeck.app data.
    </p>

    <h3>5.1. Submitting a Data Removal Request</h3>
    <p>
      You reserve the right at all times to request Freedeck.app administrators
      to fully remove your my.freedeck.app and bug-log submissions at all times.
    </p>
    <p>
      You may email <strong>fddata@aidens.dev</strong> to request your data being
      removed.
    </p>

    <p>
      It is required you retrieve your hostname. To do so, open Companion, click
      Settings on the right, scroll down until you see "Bug Report" and click
      it. The menu that opens will contain a text like this: "Hostname:
      DESKTOP-XXXXX"
    </p>

    <p>
      <a
        href="mailto:fddata@aidens.dev?subject=Remove%20my%20Freedeck%20Data&body=I%20am%20requesting%20the%20removal%20of%20my%20Data%20from%20the%20Freedeck.app%20servers.%0AMy%20machine%20hostname%20is%3A%20(REPLACE%20WITH%20YOUR%20HOSTNAME)%0AMy%20reason%20for%20requesting%20is%3A%20(This%20is%20optional.%20You%20may%20leave%20this%20blank%20or%20add%20a%20reason.)"
        >You may click this link to automatically setup the form.</a
      >
    </p>
    <details open>
      <summary>Removal Request Form</summary>
      <h3>Receiver</h3>
      <p>fddata@aidens.dev</p>
      <h3>Subject</h3>
      <p>Remove my Freedeck Data</p>
      <h3>Body</h3>
      <p>
        I am requesting the removal of my Data from the Freedeck.app servers.
      </p>
      <p>My machine hostname is: (REPLACE WITH YOUR HOSTNAME)</p>
      <p>
        My reason for requesting is: (This is optional. You may leave this blank
        or add a reason.)
      </p>
    </details>

    <h3>5.2. Submitting a Data Request</h3>
    <p>
      You reserve the right at all times to request Freedeck.app administrators
      to give you all of the data that is stored about you.
    </p>
    <p>
      You may email <strong>fddata@aidens.dev</strong> to request your data.
    </p>

    <p>
      It is required you retrieve your hostname. To do so, open Companion, click
      Settings on the right, scroll down until you see "Bug Report" and click
      it. The menu that opens will contain a text like this: "Hostname:
      DESKTOP-XXXXX"
    </p>

    <p>
      <a
        href="mailto:fddata@aidens.dev?subject=Request%20my%20Freedeck%20Data&body=I%20am%20requesting%20a%20package%20of%20my%20Data%20from%20the%20Freedeck.app%20servers.%0AMy%20machine%20hostname%20is%3A%20(REPLACE%20WITH%20YOUR%20HOSTNAME)%0AMy%20reason%20for%20requesting%20is%3A%20(This%20is%20optional.%20You%20may%20leave%20this%20blank%20or%20add%20a%20reason.)"
        >You may click this link to automatically setup the form.</a
      >
    </p>
    <details open>
      <summary>Request Form</summary>
      <h3>Receiver</h3>
      <p>fddata@aidens.dev</p>
      <h3>Subject</h3>
      <p>Request my Freedeck Data</p>
      <h3>Body</h3>
      <p>I am requesting a package of my Data from the Freedeck.app servers.</p>
      <p>My machine hostname is: (REPLACE WITH YOUR HOSTNAME)</p>
      <p>
        My reason for requesting is: (This is optional. You may leave this blank
        or add a reason.)
      </p>
    </details>
  </div>
</div>

<style>
  .policy {
    border-radius: 1.5rem;
    width: 90vw;
    background: rgba(45, 45, 50, 0.25);
    border: var(--generic-border);
    border-radius: 1.5rem;
    padding: 1.5rem;
  }

  .policy-wrapper {
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
  }
</style>
