const staticDevCoffee = "dev-coffee-site-v1";
const assets = [
  "/",
  "/login.html",
  "/assets/lib/font-awesome/css/font-awesome.css",
  "/assets/css/style.cs",
  "/assets/css/style-responsive.css",
  "/assets/lib/jquery/jquery.min.js",
  "/assets/lib/bootstrap/js/bootstrap.min.js",
  "/assets/lib/jquery.backstretch.min.js",
];

self.addEventListener("install", (installEvent) => {
  installEvent.waitUntil(
    caches.open(staticDevCoffee).then((cache) => {
      cache.addAll(assets);
    })
  );
});
