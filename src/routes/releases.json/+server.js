import { json } from "@sveltejs/kit";
export const prerender = true;

export async function GET() {
  return json(
    {
      "message_to_humans": "This is from freedeck.app, and not releases.freedeck.app",
      "channels": {
        "main": {
          "type": "repository_external",
          "title": "Official Freedeck.app Marketplace",
          "message": "This leads to the Freedeck Plugins repository.",
          "catalog": "https://freedeck.github.io/plugins/repository.json"
        },
        "demoshowcase": {
            "title": "Official Demo Marketplace",
            "type": "repository_external",
            "catalog": "https://freedeck.app/demo.json"
        },
        "extr_test": {
          "type": "repository_external",
          "title": "Test for external repository support",
          "message": "Links out to releases.freedeck.app and will be obsolete soon, and brought back to the main domain.",
          "catalog": "https://releases.freedeck.app/external_repo_test.json"
        },
        "app": {
          "type": "app_release",
          "description": "Freedeck.app - App Releases",
          "source": "https://github.com/Freedeck/app/releases/download",
          "catalog": [
              {
                  "version": "1.0.0-rc6",
                  "path": "/v1.0.0-rc6/Freedeck.exe",
                  "desc": "1.0.0-rc6"
              }
          ]
        },
        "stable": {
          "type": "release",
          "source": "https://github.com/freedeck/freedeck",
          "branch": "v6",
          "description": "Official Stable Releases",
          "catalog": [
              {
                "version": "6.0.0-rc3-02",
                "desc": "Hotfix 2"
              },
              {
                "version": "6.0.0-rc3-01",
                "desc": "Hotfix 1"
              },
              {
                "version": "6.0.0-rc3"
              },
              {
                "version": "6.0.0-rc2-01",
                "desc": "Hotfix 1"
              },
              {
                "version": "6.0.0-rc2"
              },
              {
                "version": "6.0.0-rc1-02",
                "desc": "Hotfix 2"
              },
              {
                "version": "6.0.0-rc1-01",
                "desc": "Hotfix 1"
              },
              {
                "version": "6.0.0-rc1"
              },
              {
                "version": "6.0.0-ob7-2",
                "desc": "Hotfix 2"
              },
              {
                "version": "6.0.0-ob7-1",
                "desc": "Hotfix 1"
              },
              {
                "version": "6.0.0-ob7"
              },
              {
                "version": "6.0.0-ob6-1",
                "desc": "Hotfix 1"
              },
              {
                "version": "6.0.0-ob6"
              }
          ]
        },
        "dev": {
          "type": "release",
          "source": "https://github.com/freedeck/freedeck",
          "branch": "v6-dev",
          "description": "Official Developer Beta",
          "catalog": [
              {
                  "current":true,
                  "version": "6.0.0d-rc3-051825",
                  "desc":"05/18/25, rc3"
              },
              {
                  "version":"6.0.0d-rc3-042125-1",
                  "desc":"04/21/25, rc3, bugfix 1"
              },
              {
                  "version": "6.0.0d-rc3-042125",
                  "desc": "04/21/25, rc3"
              },
              {
                  "version": "6.0.0d-rc3"
              },
              {"version": "6.0.0d-rc2"},
              {
                  "version": "6.0.0d-trc1-120824",
                  "desc": "12/08/2024, Test rc1"
              },
               {
                  "version": "6.0.0d-rc1-120824-01",
                  "desc": "12/08/2024, rc1"
              },
              {
                  "version": "6.0.0d-rc1-120724-01",
                  "desc": "12/07/2024, rc1"
              },
              {
                  "version": "6.0.0d-ob8-120324-01",
                  "desc": "12/03/2024, ob8"
              },
              {"version": "6.0.0d-ob8"},
              {"version": "6.0.0d-ob7"},
              {
                "version": "6.0.0d-0",
                "desc": "First tracked developer version"
              },
              {
                "version": "1.0.0",
                "desc": "Initial v6 commit"
              }
          ]
        }
      }
    }
  );
}