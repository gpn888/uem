<style>

html, body, div, span, iframe, blockquote, a, h1, h2, h3, h4, h5, h6, p, em, img, q, s,
small, strong, b, u, i, ul, li, svg, article, aside, 
embed, figure, figcaption, footer, header, hgroup, menu, nav, section {
  margin: 0;
  padding: 0;
  border: 0;
  font-size: 100%;
  font-family: inherit;
  font-weight: inherit;
  font-style: inherit;
  font-variant: inherit;
  vertical-align: baseline; }
article, aside, details, figcaption, figure, footer, header, hgroup, menu, nav, section, div {
  display: block; }
body {
	color: #333;
	font-family: sans-serif;
	font-size: 1em;
	line-height: 1; 
}
h1, h2, h3, h4, h5, h6 {
	font-family: sans-serif;
}
a {
	color: #333;
	outline: 0;
	text-decoration: none;
}
ol, ul {
  list-style: none; }
*, *::after, *::before {
    box-sizing: border-box; }

 
/* latin */
@font-face {
  font-family: 'Work Sans';
  font-style: normal;
  font-weight: 400;
  src: local('Work Sans'), local('WorkSans-Regular'), url(https://fonts.gstatic.com/s/worksans/v3/ElUAY9q6T0Ayx4zWzW63VFtXRa8TVwTICgirnJhmVJw.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215;
}
 
/* latin */
@font-face {
  font-family: 'Work Sans';
  font-style: normal;
  font-weight: 500;
  src: local('Work Sans Medium'), local('WorkSans-Medium'), url(https://fonts.gstatic.com/s/worksans/v3/Nbre-U_bp6Xktt8cpgwaJOgdm0LZdjqr5-oayXSOefg.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215;
}
 
/* latin */
@font-face {
  font-family: 'Work Sans';
  font-style: normal;
  font-weight: 700;
  src: local('Work Sans Bold'), local('WorkSans-Bold'), url(https://fonts.gstatic.com/s/worksans/v3/4udXuXg54JlPEP5iKO5Amegdm0LZdjqr5-oayXSOefg.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215;
}

body {
    font-family: 'Work Sans', sans-serif; 
    line-height: 1; }
h1, h2, h3, h4, h5, h6, b, strong {
    font-family: 'Work Sans', sans-serif;
    font-weight: 400;  
}

.header {
	background-color: white;
    position: fixed;
    z-index: 10;
    width: 100%; 
    display: flex;
    padding: .5rem 1rem; 
    flex-flow: row wrap;
    justify-content: space-between;
    align-items: center;
    box-shadow: 0 0 20px rgba(60,60,60,.5);
    transition: .4s box-shadow;
}
.main-go .header {
    box-shadow: 0 0 5px rgba(0,0,0,.5);
}
.logo {  
    width: 150px;
}
	.logo,
	.logo a, .logo img {
		display: block;
	}

.menu ul {
	display: none;
	opacity: 0;
	justify-content: space-between;
	flex-flow: row wrap;
    margin-top: 1rem;
	transition: .4s opacity;
}
.menu ul {
	opacity: 1;
}
.menu ul a {
    font-size: .75em;
    font-weight: 400;
    text-transform: uppercase;
    color: black;
    position: relative;
    display: inline-block;
    margin-left: 1rem;
    letter-spacing: 1px;
    transition: .4s color;
}
.menu ul a span {
    display: block;
    font-size: .85em;
}
.menu ul li:last-child a {
    border: 1px solid #444;
    padding: .25rem .5rem;
}
.menu ul a:hover,
.menu ul a.active {
	color: #1ebae0;
}
.menu ul li:last-child a:hover {
    border-color: #888;
    color: #888;
}
.menu ul li:last-child a.active {
    border-color: #1ebae0;
    color: #1ebae0;
}
.menu ul a::before {
    content: "•";
    position: absolute;
    transform: translateX(-50%);
    left: 43%;
    width: 0;
    text-shadow: 10px 0 transparent, -10px 0 transparent;
    color: transparent;
    font-size: 1.2em;
    display: block;
    top: 120%;
    transition: .4s all;
}
.menu ul a.active::before {
	color: #1ebae0;
	text-shadow: 10px 0 #1ebae0, -10px 0 #1ebae0;
}
.menu ul li:last-child a::before {
     content: '';
}

.height {
    min-height: 100vh;
    position: relative;
}

.somos {
    position: relative;
    display: flex;
    align-items: center;
    padding: calc(60px + 2rem) 1rem 1rem; 
}
.somos .texto { 
    position: relative;
    z-index: 3; 
    left: 1rem;
    right: 1rem;
    text-align: center;
    width: calc(100% - 2em);
}
.somos .texto h2 {
    font-weight: 600;
    font-size: 1.2em;
    position: relative;
    z-index: 2;
    line-height: 1.2;
    color: #444;
}
.somos .texto h3 {
    font-weight: 400;
    margin-top: 1rem;
    font-size: .9em;
    letter-spacing: 2px;
}
.somos .texto .links {
    margin-top: 2rem;
}
.btn { 
    padding: .75rem 1.5rem;
    display: inline-block;
    font-weight: 500;
    text-transform: uppercase;
    color: #777;
    font-size: .8em;
    margin-bottom: .5rem;
    position: relative;
    text-align: center;
    transition: .3s color;
}
.btn span {
    display: block;
    font-size: .8em;
}
.btn u,
.btn s {
	position: absolute;
	top: 0;
	left: 0;
	right: 0;
	bottom: 0;
	display: block;
}
.btn u::before,
.btn u::after,
.btn s::before,
.btn s::after {
    content: '';
    width: 10px;
	height: 10px;
	display: block;
	position: absolute;
	transition: .4s all;
} 
.btn u::before {
	border-left: 2px solid #999;
	border-top: 2px solid #999;
	top: 0;
	left: 0;
}
.btn u::after {
	border-right: 2px solid #999;
	border-bottom: 2px solid #999;
	bottom: 0;
	right: 0;
}
.btn s::before {
	border-right: 2px solid #999;
	border-top: 2px solid #999;
	top: 0;
	right: 0;
}
.btn s::after {
	border-left: 2px solid #999;
	border-bottom: 2px solid #999;
	bottom: 0;
	left: 0;
}
.btn:hover {
	color: #000;
}
.btn:hover u::before,
.btn:hover u::after {
	width: 100%;
	border-color: #000;
}
.btn:hover s::before,
.btn:hover s::after {
	height: 100%;
	border-color: #000;
}

.somos .background {
    position: absolute;
    background-attachment: fixed;
    background-color: black;
    background-image: url("../img/gray/home.jpg");
    background-size: cover;
    left: 1rem;
    right: 1rem;
    height: calc(100% - 2rem);
    opacity: .25;
    bottom: 1rem;
    top: 1rem;
    z-index: 1;
}

@media (min-width: 37.5em) {

.somos .texto h2 {
	font-size: 1.5em;
}
.somos .texto h3 {
    font-size: 1.1em;
    margin-bottom: 1rem;
}
.links > a {
	font-size: 1em;
	padding: 1rem 2rem;
}

}

@media (min-width: 56.25em) {

.menu ul {
	display: flex;
}
.menu ul li:first-child {
    display: none;
}
.menu ul a {
    font-size: .85em;
    margin-left: 1.5rem;
}
[lang="en"] .menu ul a {
    font-size: .8em;
}

.somos .texto h2 { 
	max-width: 75%;
	margin: auto;
}
.somos .texto h3 {
    font-size: 1.25em; 
}
.somos .texto .links {
    padding-top: 1rem;
}

}

@media (min-width: 75em) {

.header {
	padding: 1rem 6rem;
}
.menu ul a,
[lang="en"] .menu ul a {
    font-size: .9em;
    margin-left: 2rem;
}


.somos {
	padding: calc(75px + 2rem) 6rem 1rem;
}
.somos .texto h2 {
    font-size: 2em;
    max-width: 70%;
}
.somos .texto h3 {
    font-size: 1.5em; 
}
.links > a {
	font-size: 1em;
	padding: 1rem 2rem;
}
.somos .background { 
	left: 6rem; 
	right: 6rem;
	bottom: 3rem; 
    top: 3rem;
    height: calc(100% - 6rem);
} 

}

@media (min-width: 100em) {

.somos .background { 
}

}

.button {
    width: 1.5rem;
    height: 1rem;
    display: block;
    position: relative;
    cursor: pointer;
    transition: .4s all;
    opacity: .5;
    margin-top: 2rem;
} 
.button::before, 
.button::after {
    content: '';
    width: 100%;
    height: .25rem;
    background-color: black;
    display: block;
    top: 0;
    position: absolute;
    transition: .4s transform;
}
.button::after {
    top: auto;
    bottom: 0;
}
.button:hover::before {
	transform: translateY(-.125rem);
}
.button:hover::after {
	transform: translateY(.125rem);
}
.toggle .button {
	transform: rotate(45deg);
}
.toggle .button:hover {
	opacity: .6;
}
.toggle .button::before {
	transform: rotate(-90deg) translate(-.375rem, 0);
}
.toggle .button::after {
	transform: rotate(0) translate(0, -.375rem);
}

.alternador {
    position: fixed;
    top: 0;
    z-index: 11;
    right: calc(1rem - 6px);
    font-size: .85em;
    text-transform: uppercase;
    letter-spacing: 8px;
    top: calc(3rem - 9px);
    transition: .4s top;
}
.alternador a {
    color: #888;
    transition: .4s color;
}
.alternador {
	top: calc(1rem - 2px);
}
.alternador a:hover {
    color: black;
}

@media (min-width: 56.25em) {

.button {
	display: none;
}
.alternador {
	right: calc(6rem - 6px);
/*	top: calc(4rem - 4px);*/
}

}

.mobile {
    display: none;
}

.ie {
    display: none;
}
html[data-useragent*='Trident'] .ie {
    display: block;
}
html[data-useragent*='Trident'] .modern {
    display: none;
}

</style>