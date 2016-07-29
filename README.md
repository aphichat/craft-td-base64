### TD Base64 plugin for Craft CMS

A plugin for encode and decode variables within [Craft CMS](http://buildwithcraft.com) templates.

**Installation**

1. Unzip file 
2. Place `td_base64` directory into your `craft/plugins` directory
3. Install plugin in the Craft Control Panel under Settings > Plugins

###Encode

  {{ craft.td_base64.encode('test') }}

###Decode

  {{ craft.td_base64.decode('dGVzdA==') }}
