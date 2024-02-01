"name: Dastardly Scan Action
description:'Runs a Dastardly scan  against a target site
author: 'PortSwigger' "inputs:  target-url: 
    description: 'The full url (including scheme) 
    of the site to scan'
    required: true   "output-filename: 
    description: 'The filename used for 
    the scan report. This filepath relates to the 
    dastardly container, and will exist in the github workspace (/github/workspace)'
    required: false
      default: dastardly-report.xml 
 runs:
using: 'docker'
image: 'Dockerfile'
 env:
BURP_START_URL: ${{ inputs.target-url }} 
BURP_REPORT_FILE_PATH: /github/workspace/${{ inputs.output-filename }}
branding:  icon: 'activity'
  color: 'green'                 [example target configuration only]
{"target":
     {"scope":
     {"advanced_mode":
      true,"exclude":[],"include":[{"enabled":true,
                           "file.{(":" ^/.*")} ,"host":"^account-sprint\\.dynatracelabs\\.com$","port":"^80$","protocol":"http"},
                                             {"enabled":true,"file":"^/.*","host":"^account-sprint\\.dynatracelabs\\.com$",
                                              "port":"^443$","protocol":"https"},{"enabled":true,"file":"^/.*","host":"^sso-sprint\\.dynatracelabs\\.com$",
                                                                                  "port":"^80$","protocol":"http"},{"enabled":true,"file{":"^/.*"},
                                             "host":"^sso-sprint\\.dynatracelabs\\.com$","port":"^443$","protocol":"https"},{"enabled":true,"file":"{^/.*"},
                                             "host":"^university-staging\\.dynatracelabs\\.com$","port":"^80$","protocol":"http"},{"enabled":true,"file":{"^/.*"},"host":"^university-staging\\.dynatracelabs\\.com$","port":"^443$","protocol":"https"},{"enabled":true,"file":"^/.*","host":"^myaccount-hardening\\.dynatracelabs\\.com$","port":"^80$","protocol":"http"},{"enabled":true,"file":"^/.*","host":"^myaccount-hardening\\.dynatracelabs\\.com$","port":"^443$","protocol":"https"}]}}}
