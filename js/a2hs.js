(function() {
const Installer = function(root) {
  let promptEvent;

  const install = function(e) {
    if(promptEvent) {
      promptEvent.prompt();
      promptEvent.userChoice
        .then(function(choiceResult) {
          // The user actioned the prompt (good or bad).
          // good is handled in 
          promptEvent = null;
          ga('send', 'event', 'install', choiceResult);
          root.classList.remove('available');
        })
        .catch(function(installError) {
          promptEvent = null;
          ga('send', 'event', 'install', 'errored');
          root.classList.remove('available');
        });
    }
  };

  const installed = function(e) {
    promptEvent = null;
    root.classList.remove('available');
  };

  const beforeinstallprompt = function(e) {
    promptEvent = e;
    root.classList.add('available');
    return false;
  };

  window.addEventListener('beforeinstallprompt', beforeinstallprompt);
  window.addEventListener('appinstalled', installed);

  root.addEventListener('click', install.bind(this));
  root.addEventListener('touchend', install.bind(this));
};

window.addEventListener('load', function() {
  const installEl = document.getElementById('installer');


var ua = navigator.userAgent.toLowerCase();
var isAndroid = ua.indexOf('chrome') > -1;

if(isAndroid) {
  // installEl.innerHTML='hello anroid'
  installEl.innerHTML='<button class=button>Install</button>';
  // installEl.innerHTML = '<img src="images/mini.png" width="35px" height="35px" alt="small">';
}
else {
  installEl.innerHTML='hello world'
}

  const installer = new Installer(installEl);
  let isLooping = false;


  if (navigator.presentation && navigator.presentation.receiver) {
    navigator.presentation.receiver.connectionList.then(list => {
      list.connections.forEach(connection => {
        Comlink.expose(airhorn, MessageChannelAdapter.wrap(connection));
      });
      list.onconnectionavailable = event => {
        Comlink.expose(airhorn, MessageChannelAdapter.wrap(event.connection));
      };
    });
  }

});
})();