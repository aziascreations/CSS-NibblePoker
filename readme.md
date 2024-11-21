# NibblePoker's CSS Theme (W.I.P.)
A simple and minimalist CSS stylesheet used across all my websites and web-based applications.

## Structure
This stylesheet is composed of 4 major parts that all work together towards a common goal
all the while staying independent and usable individually if you ever wished to.

### External
The *External* rules regroup every external CSS stylesheets that are included in this one.\
Currently, [reset.css](https://meyerweb.com/eric/tools/css/reset/) is the only such stylesheet.

**See:** [scss/external/](scss/external)

### Core
The *Core* rules define mostly universal and portable CSS rules and other utilities for text,
spacing and whatnot. \
Internally, they are defined after everything else in order to let them override rules
applied to the custom elements and site-centric rules.

**See:** [scss/core/](scss/core)

### Site

### Custom



## License
The code in this repository is released under [CC0 1.0 Universal (CC0 1.0) (Public Domain)](LICENSE-CC0)

This repository includes and redistributes [reset.css](https://meyerweb.com/eric/tools/css/reset/) from 
[meyerweb.com](https://meyerweb.com/) which is also in the public domain.

**This license doesn't apply to the logos, images, names and other external resources provided
and/or used in this repository.**
