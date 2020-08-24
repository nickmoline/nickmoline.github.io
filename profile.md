---
layout: page
title: "Nicholas Scott Moline's Profile"
permalink: /profile.html
---
## Nicholas Scott Moline



### GitHub Open Source Repositories
{% for repository in site.github.public_repositories %}
[{{ repository.name }}]({{ repository.html_url }})  
    {% for field, value in repository %}
    - {{ field }}: {{ value }}
    {% endfor %}
{% endfor %}

{{ site.github.public_repositories | inspect }}