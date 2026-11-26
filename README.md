# Amtrak Arrival Tracker

A single-page tracker that shows when an Amtrak train is expected to arrive at a given station, using live data from Amtrak's Track Your Train feed via [Amtraker](https://amtraker.com).

**Live page:** https://wgeorge1016.github.io/amtrak-tracker/?train=2159&station=WAS

## Use
- Enter a train number and a station code (e.g. `WAS`, `NYP`, `BOS`), then tap **Track**.
- It refreshes every 60 seconds. You can bookmark a train with `?train=NUMBER&station=CODE`.
- The link at the top of the page updates as you type. Tap **Copy**, or **Share** on phones, to send it to someone.

## Files
- `index.html`: the whole app (HTML/CSS/JS, no build step).
- `proxy.php`: optional. Only needed if a host or browser blocks the direct API call; put it next to `index.html` on a PHP host and the page will fall back to it.

Data: [Amtraker API](https://api-v3.amtraker.com/docs). Not affiliated with Amtrak.
