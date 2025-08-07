import { json } from '@sveltejs/kit';
export const prerender = true;

export async function GET(e) {
  return json({
    "OBSControl": {
            "source": "github:freedeck/obscontrol",
            "title": "OBSControl",
            "author": "Freedeck",
            "version": "1.2.1",
            "description": "Control your OBS Studio setup right from your Freedeck.",
            "download": "#"
          },
          "Twitch": {
            "source": "github:freedeck/twitch",
            "title": "Twitch",
            "author": "Freedeck",
            "version": "1.1.0",
            "description": "See any Twitch streamer's view count.",
            "download": "#"
          },
          "Clock": {
            "source": "github:freedeck/clock",
            "title": "Clock",
            "author": "Freedeck",
            "version": "1.2.0",
            "description": "A simple clock for your Freedeck.",
            "download": "#"
          },
          "HAFreedeck": {
            "source": "github:freedeck/home-assistant-plugin",
            "title": "HAFreedeck",
            "author": "Freedeck",
            "version": "1.2.0",
            "description": "Connect to your Home Assistant instance to view entity states!",
            "download": "#"
          }
})
}