# Wayfinding Documentation

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
- /\_PWB-files - contains configuration files for Public Web Browser app
- /css - stylesheets for wayfinding
- /images - images used for wayfinding
  - /icons - images used to create legend
- /includes - modular html for wayfinding pages
  - directory_list.txt - mapping of directory listings to element ids within map svg files
  - head.html - <head> stanza
  - mainnav.html - top nav menu
- /js - javascript files for wayfinding (may need to go through and figure out which ones we actually use)
    - wayfinding.js - custom js containing sidebar text for various locations on the floor plans corresponding to an image map of clickable areas on each floor's floorplan
- /maps - map images from LibMaps
  - jtr_[#].svg - Map image for [#] floor
- /sass - sass file for custom-style.css (deprecated)

## Overview

The wayfinding display map contains a menu of wayfinding pages. 

- The **get started** page contains QR codes for information links about the library
- The **hours** page contains the library hours for the current day
- The **maps** page contains floor plans of the library and displays by default
- The **events** page contains a list of upcoming events in the library
- The **classes** page contains a list of upcoming library instruction classes

## Maps Page
The **maps** page checks the "floor" field in the URL for a specific floor and displays that floor plan, otherwise it displays the floor plans for all four floors. It also displays a directory sidebar containing a list of items that can be found on the current floor (or on all floors if displaying all floors).

## Directory_list.txt
The **includes/directory_list.txt** file contains a map of directory items (by floor) to the corresponding ids of "hotspot" elements contained within the map svg files. The syntax of each item in the file is `Floor;Label;'ID'[,'ID']`. 

If a single floor contains multiple items with the same label, then that entry should contain a list of the corresponding ids separated by commas (e.g. "First Floor;Copiers;'copy-1-1','copy-1-2'").

Items with the same label across different floors (e.g. "Restrooms") should have a separate listing for each floor (e.g. "First Floor;Restrooms;'first-floor-restrooms'", "Second Floor;Restrooms;'second-floor-restrooms'", etc.) so that when each floor is viewed individually, the items for that floor will appear in the Directory sidebar. The mapping code will automatically group items with the same label so that if all floors are on display, clicking the label will highlight the corresponding items on the maps across all floors. 

## Map Files and Hotspot IDs
The SVG files for each floor (in the **maps** directory) are exported from the Manage Map Image interface in LibMaps. The map files should be renamed to those specified in the **maps.php** file (e.g. "jtr_1.svg" for the first floor map for the JTR Library).

The wayfinding code uses the Hotspot elements defined in LibMaps to highlight areas on the map. The name assigned to each hotspot is the element id that should be listed in the directory map.

## Setup and Maintenance Workflow
When setting up the maps

- go through the maps.php file and set up the "floor" field logic based on the number of floors you wish to display
- download the map files from LibMaps, rename them according to the file names you specify in maps.php, and save them to the maps folder
- edit the includes/directory_list.txt file to contain all of the map items you want to highlight on each floor, using the hotspot names specified in the hotspot editor in LibMaps

When updating the maps

- download the updated map file(s) from LibMaps, rename them, and save them to the maps folder
- update the includes/directory_list.txt file with any hotspot changes

