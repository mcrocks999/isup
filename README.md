# isup

> This is a simple website / api which can be used to check the status of websites.

> Live demo: https://tabpixels.tech/isup

API response table

Key | Value | Description
--- | --- | ---
success | `true` or `false` | Returns false if you have not specified a url
online | `true` or `false` | Returns if online, false if not successful, see `success`
url | eg. `https://google.com` | Returns the url specified
message | eg. `https://google.com is online!`, `https://myfakesite.com is offline.`, `Specify a url` | Returns a generated message

Sample response from `api.php?u=https://google.com`
```json
{
	"success": true,
	"online": true,
	"url": "https:\/\/google.com",
	"message": "https:\/\/google.com is online!"
}
```
