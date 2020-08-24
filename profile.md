---
layout: page
title: "Nicholas Scott Moline's Profile"
permalink: /profile.html
---


### GitHub Public Repositories
{% for repository in site.github.public_repositories %}
#### [{{ repository.full_name }}]({{ repository.html_url }})
- Last Pushed: <time datetime="{{ repository.pushed_at | date_to_xmlschema }}">{{ repository.pushed_at | date: "%B %-d, %Y %}}
{% endfor %}

{{ site.github | inspect }}