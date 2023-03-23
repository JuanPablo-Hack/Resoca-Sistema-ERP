const staticDevCoffee = "dev-coffee-site-v1";
const assets = [
  "/",
  "/index.php",
  "/css/style.css",
  "/js/main.js",
  "/js/app.js",
];

self.addEventListener("install", (installEvent) => {
  installEvent.waitUntil(
    caches.open(staticDevCoffee).then((cache) => {
      cache.addAll(assets);
    })
  );
});
