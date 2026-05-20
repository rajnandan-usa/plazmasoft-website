// public/service-worker.js

const CACHE_NAME = 'plazmasoft-cache-v2';  // Updated cache name for versioning
const urlsToCache = [
  // Favicons
  '/favicon/apple-icon-57x57.png',
  '/favicon/apple-icon-60x60.png',
  '/favicon/apple-icon-72x72.png',
  '/favicon/apple-icon-76x76.png',
  '/favicon/apple-icon-114x114.png',
  '/favicon/apple-icon-120x120.png',
  '/favicon/apple-icon-144x144.png',
  '/favicon/apple-icon-152x152.png',
  '/favicon/apple-icon-180x180.png',
  '/favicon/android-icon-192x192.png',
  '/favicon/favicon-32x32.png',
  '/favicon/favicon-96x96.png',
  '/favicon/favicon-16x16.png',
  '/favicon/favicon.ico',
  '/favicon/ms-icon-144x144.png',
  '/manifest.json',

  // CSS
  '/assets/css/bootstrap.min.css',
  '/assets/css/icon-font.min.css',
  '/assets/css/plugins.css',
  '/assets/css/jqvmap.min.css',
  '/assets/css/style.css',

  // JS
  '/assets/js/vendor/jquery-1.12.0.min.js',
  '/assets/js/popper.min.js',
  '/assets/js/bootstrap.min.js',
  '/assets/js/plugins.js',
  '/assets/js/main.js',
];

// Install event - caching the specified assets
self.addEventListener('install', function (event) {
  event.waitUntil(
    caches.open(CACHE_NAME)
      .then(function (cache) {
        return cache.addAll(urlsToCache); // Add the specified resources to the cache
      })
      .catch(function (error) {
        console.error('Failed to open cache', error);
      })
  );
  self.skipWaiting(); // Ensure the service worker activates immediately
});

// Fetch event - Always fetch from network without caching
self.addEventListener('fetch', function (event) {
  // Simply fetch everything from the network
  event.respondWith(
    fetch(event.request)
      .catch(function() {
        // You can add a fallback here if needed
        console.error('Fetch failed; returning offline page instead.');
      })
  );
});

// Activate event - Clean up old caches and ensure the new one is active
self.addEventListener('activate', function (event) {
  const cacheWhitelist = [CACHE_NAME]; // Only keep current cache
  
  event.waitUntil(
    caches.keys().then(function (cacheNames) {
      return Promise.all(
        cacheNames.map(function (cacheName) {
          if (cacheWhitelist.indexOf(cacheName) === -1) {
            return caches.delete(cacheName); // Delete old cache versions
          }
        })
      );
    }).then(() => {
      return self.clients.claim(); // Activate the service worker and take control of all clients
    })
  );
});

