---
layout: page
title: "Nicholas Scott Moline's Profile"
permalink: /profile.html
---
## Nicholas Scott Moline



### GitHub Open Source Repositories
{% for repository in site.github.public_repositories %}
[{{ repository.name }}]({{ repository.html_url }})  
    {% for field in repository %}
        {% for item in field %}
    - {{ item[0] }}: {{ item[1] }}
        {% endfor %}
    {% endfor %}
{% endfor %}

{{ site.github.public_repositories | inspect }}