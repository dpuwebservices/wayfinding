# WayFinding

This is the 2025 version (in progress) of the Wayfinding display map for DePaul JTR Library.

(Local note: Further local documentation is available in the Digital Services Wiki)

## Dependencies
- Public Web Browser (https://www.teamsoftwaresolutions.com/)
- Windows Kiosk Mode (https://learn.microsoft.com/en-us/windows/configuration/kiosk/)

The files in the \_PWB-files folder are used by the Public Web Browser app and need to be loaded into the PWB directory of the wayfinding machines. Changes made to the wayfinding site (https://libservices.org/wayfinding/)will not be reflected until PWB is interrupted and restarted (Ctrl-Alt-Shift + Insert, then enter override keyword).

NOTE: When running on local machine, enlarge screen to 133% to better mimic actual display

## Files

- classes.php - queries LibCal for today's Library classes
- events.php - queries events.depaul.edu for today's events in the Library
- get-started.php - lists QR codes for typical patron actions
- hours.php - queries LibCal for today's Library hours
- index.html - redirects to maps.php
- maps.php - displays interactive floor plans
- README.md - this file
- /\_PWB-files - contains configuration files for Public Web Browser app (need to be updated - KE 2025-11-20)
- /css - stylesheets for wayfinding (may need to go through and figure out which ones we actually use)
- /fonts - fonts we use (may need to go through and figure out which ones we actually use)
- /images - images used for wayfinding
  - /\_notes - dwsync metadata (presumably dwsync is used for syncing with a local directory somewhere)
  - /maps - map overlays (deprecated)
- /includes - modular html for wayfinding pages
  - head.html - <head> stanza
  - info-directory.html - directory menu of library locations/features organized by function
  - info-floor.html - directory menu organized by floor
  - infopanel.php - sidebar content
  - mainnav.html - top nav menu
- /js - javascript files for wayfinding (may need to go through and figure out which ones we actually use)
    - wayfinding.js - custom js containing sidebar text for various locations on the floor plans corresponding to an image map of clickable areas on each floor's floorplan
- /maps - map images
  - jtr_[#].svg - Map image for [#] floor
- /sass - sass file for custom-style.css (deprecated)
