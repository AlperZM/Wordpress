/*!
Theme Name: Seges One
Theme URI: http://seges.web.tr
Author: Seges
Author URI: http://seges.web.tr
Description: Classic theme for wordpress. Seo friendly less code. One page
Version: 1.0.0
Tested up to: 5.4
Requires PHP: 5.6
License: GNU General Public License v2 or later
License URI: LICENSE
Text Domain: seges-one
Tags: custom-background, custom-logo, custom-menu, featured-images, threaded-comments, translation-ready,classic theme, 

Normalizing styles have been helped along thanks to the fine work of
Nicolas Gallagher and Jonathan Neal https://necolas.github.io/normalize.css/
*/

/*--------------------------------------------------------------
>>> TABLE OF CONTENTS:
----------------------------------------------------------------
# Generic
  - Normalize
  - Box sizing
# Base
  - Typography
  - Elements
  - Links
  - Forms
## Layouts
# Components
  - Navigation
  - Posts and pages
  - Comments
  - Widgets
  - Media
  - Captions
  - Galleries
# plugins
  - Jetpack infinite scroll
# Utilities
  - Accessibility
  - Alignments

# Generic --------------------------------------------------------------*/

/* Normalize --------------------------------------------- */
:root{
  --primary: #EFF3F0;
  --secondary: #9CAFA3;
  --third: #D88C48;
  --fourth: #9AB973;
  --fifth: #425756;
}
 * 1. Correct the line height in all browsers.
 * 2. Prevent adjustments of font size after orientation changes in iOS.
 */
html {
  line-height: 1.15;
  -webkit-text-size-adjust: 100%;
}

/* Sections ========================================================================== */

/* Remove the margin in all browsers. */
body {
  margin: 0;
}

/** Render the `main` element consistently in IE. */
main {
  display: block;
}

/** Correct the font size and margin on `h1` elements within `section` and
 * `article` contexts in Chrome, Firefox, and Safari. */
h1 {
  font-size: 2em;
  margin: 0.67em 0;
}

/* Grouping content
   ========================================================================== */

/** 1. Add the correct box sizing in Firefox.
 * 2. Show the overflow in Edge and IE. */
hr {
  box-sizing: content-box;
  height: 0;
  overflow: visible;
}

/** 1. Correct the inheritance and scaling of font size in all browsers.
 * 2. Correct the odd `em` font sizing in all browsers. */
pre {
  font-family: monospace, monospace;
  font-size: 1em;
}

/* Text-level semantics
   ========================================================================== */

/**Remove the gray background on active links in IE 10. */
a {
  background-color: transparent;
}

/** 1. Remove the bottom border in Chrome 57-
 * 2. Add the correct text decoration in Chrome, Edge, IE, Opera, and Safari. */
abbr[title] {
  border-bottom: none;
  text-decoration: underline;
  text-decoration: underline dotted;
}

/** Add the correct font weight in Chrome, Edge, and Safari. */
b,
strong {
  font-weight: bolder;
}

/** 1. Correct the inheritance and scaling of font size in all browsers.
 * 2. Correct the odd `em` font sizing in all browsers. */
code,
kbd,
samp {
  font-family: monospace, monospace;
  font-size: 1em;
}

/** Add the correct font size in all browsers. */
small {
  font-size: 80%;
}

/** Prevent `sub` and `sup` elements from affecting the line height in
 * all browsers. */
sub,
sup {
  font-size: 75%;
  line-height: 0;
  position: relative;
  vertical-align: baseline;
}

sub {
  bottom: -0.25em;
}

sup {
  top: -0.5em;
}

/* Embedded content
========================================================================== */

/** Remove the border on images inside links in IE 10. */
img {
  border-style: none;
}

/* Forms
========================================================================== */

/** 1. Change the font styles in all browsers.
 * 2. Remove the margin in Firefox and Safari. */
button,
input,
optgroup,
select,
textarea {
  font-family: inherit;
  font-size: 100%;
  line-height: 1.15;
  margin: 0;
}

/** Show the overflow in IE.
 * 1. Show the overflow in Edge. */
button,
input {
  overflow: visible;
}

/** Remove the inheritance of text transform in Edge, Firefox, and IE.
 * 1. Remove the inheritance of text transform in Firefox. */
button,
select {
  text-transform: none;
}

/**Correct the inability to style clickable types in iOS and Safari. */
button,
[type="button"],
[type="reset"],
[type="submit"] {
  -webkit-appearance: button;
}

/** Remove the inner border and padding in Firefox. */
button::-moz-focus-inner,
[type="button"]::-moz-focus-inner,
[type="reset"]::-moz-focus-inner,
[type="submit"]::-moz-focus-inner {
  border-style: none;
  padding: 0;
}

/** Restore the focus styles unset by the previous rule. */
button:-moz-focusring,
[type="button"]:-moz-focusring,
[type="reset"]:-moz-focusring,
[type="submit"]:-moz-focusring {
  outline: 1px dotted ButtonText;
}

/** Correct the padding in Firefox. */
fieldset {
  padding: 0.35em 0.75em 0.625em;
}

/** 1. Correct the text wrapping in Edge and IE.
 * 2. Correct the color inheritance from `fieldset` elements in IE.
 * 3. Remove the padding so developers are not caught out when they zero out
 *		`fieldset` elements in all browsers. */
legend {
  box-sizing: border-box;
  color: inherit;
  display: table;
  max-width: 100%;
  padding: 0;
  white-space: normal;
}

/** Add the correct vertical alignment in Chrome, Firefox, and Opera. */
progress {
  vertical-align: baseline;
}

/** Remove the default vertical scrollbar in IE 10+. */
textarea {
  overflow: auto;
}

/** 1. Add the correct box sizing in IE 10.
 * 2. Remove the padding in IE 10. */
[type="checkbox"],
[type="radio"] {
  box-sizing: border-box;
  padding: 0;
}

/** Correct the cursor style of increment and decrement buttons in Chrome. */
[type="number"]::-webkit-inner-spin-button,
[type="number"]::-webkit-outer-spin-button {
  height: auto;
}

/** 1. Correct the odd appearance in Chrome and Safari.
 * 2. Correct the outline style in Safari. */
[type="search"] {
  -webkit-appearance: textfield;
  outline-offset: -2px;
}

/** Remove the inner padding in Chrome and Safari on macOS. */
[type="search"]::-webkit-search-decoration {
  -webkit-appearance: none;
}

/** 1. Correct the inability to style clickable types in iOS and Safari.
 * 2. Change font properties to `inherit` in Safari. */
::-webkit-file-upload-button {
  -webkit-appearance: button;
  font: inherit;
}

/* Interactive ========================================================================== */

/* Add the correct display in Edge, IE 10+, and Firefox. */
details {
  display: block;
}

/* Add the correct display in all browsers. */
summary {
  display: list-item;
}

/* Misc	 ========================================================================== */

/** Add the correct display in IE 10+. */
template {
  display: none;
}

/** Add the correct display in IE 10. */
[hidden] {
  display: none;
}

/* Box sizing-------------------------------------------- */

/* Inherit box-sizing to more easily change it's value on a component level.
@link http://css-tricks.com/inheriting-box-sizing-probably-slightly-better-best-practice/ */
*,
*::before,
*::after {
  box-sizing: inherit;
}

html {
  box-sizing: border-box;
}

/*# Base--------------------------------------------------------*/

/* Typography---------------------------------------- */
body,
button,
input,
select,
optgroup,
textarea {
  color: #404040;
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
  font-size: 1rem;
  line-height: 1.5;
}

h1,
h2,
h3,
h4,
h5,
h6 {
  clear: both;
}

p {
  margin-bottom: 1.5em;
}

dfn,
cite,
em,
i {
  font-style: italic;
}

blockquote {
  margin: 0 1.5em;
}

address {
  margin: 0 0 1.5em;
}

pre {
  background: #eee;
  font-family: "Courier 10 Pitch", courier, monospace;
  line-height: 1.6;
  margin-bottom: 1.6em;
  max-width: 100%;
  overflow: auto;
  padding: 1.6em;
}

code,
kbd,
tt,
var {
  font-family: monaco, consolas, "Andale Mono", "DejaVu Sans Mono", monospace;
}

abbr,
acronym {
  border-bottom: 1px dotted #666;
  cursor: help;
}

mark,
ins {
  background: #fff9c0;
  text-decoration: none;
}

big {
  font-size: 125%;
}

/* Elements--------------------------------------------- */
body {
  background: #fff;
}

hr {
  background-color: #ccc;
  border: 0;
  height: 1px;
  margin-bottom: 1.5em;
}

ul,
ol {
  margin: 0 0 1.5em 3em;
}

ul {
  list-style: disc;
}

ol {
  list-style: decimal;
}

li > ul,
li > ol {
  margin-bottom: 0;
  margin-left: 1.5em;
}

dt {
  font-weight: 700;
}

dd {
  margin: 0 1.5em 1.5em;
}

/* Make sure embeds and iframes fit their containers. */
embed,
iframe,
object {
  max-width: 100%;
}

img {
  height: auto;
  max-width: 100%;
}

figure {
  margin: 1em 0;
}

table {
  margin: 0 0 1.5em;
  width: 100%;
}

/* Links--------------------------------------------- */
a {
  color: #4169e1;
}

a:visited {
  color: #800080;
}

a:hover,
a:focus,
a:active {
  color: #191970;
}

a:focus {
  outline: thin dotted;
}

a:hover,
a:active {
  outline: 0;
}

/* Forms--------------------------------------------- */
button,
input[type="button"],
input[type="reset"],
input[type="submit"] {
  border: 1px solid;
  border-color: #ccc #ccc #bbb;
  border-radius: 3px;
  background: #e6e6e6;
  color: rgba(0, 0, 0, 0.8);
  line-height: 1;
  padding: 0.6em 1em 0.4em;
}

button:hover,
input[type="button"]:hover,
input[type="reset"]:hover,
input[type="submit"]:hover {
  border-color: #ccc #bbb #aaa;
}

button:active,
button:focus,
input[type="button"]:active,
input[type="button"]:focus,
input[type="reset"]:active,
input[type="reset"]:focus,
input[type="submit"]:active,
input[type="submit"]:focus {
  border-color: #aaa #bbb #bbb;
}

input[type="text"],
input[type="email"],
input[type="url"],
input[type="password"],
input[type="search"],
input[type="number"],
input[type="tel"],
input[type="range"],
input[type="date"],
input[type="month"],
input[type="week"],
input[type="time"],
input[type="datetime"],
input[type="datetime-local"],
input[type="color"],
textarea {
  color: #666;
  border: 1px solid #ccc;
  border-radius: 3px;
  padding: 3px;
}

input[type="text"]:focus,
input[type="email"]:focus,
input[type="url"]:focus,
input[type="password"]:focus,
input[type="search"]:focus,
input[type="number"]:focus,
input[type="tel"]:focus,
input[type="range"]:focus,
input[type="date"]:focus,
input[type="month"]:focus,
input[type="week"]:focus,
input[type="time"]:focus,
input[type="datetime"]:focus,
input[type="datetime-local"]:focus,
input[type="color"]:focus,
textarea:focus {
  color: #111;
}

select {
  border: 1px solid #ccc;
}

textarea {
  width: 100%;
}

/*# Layouts--------------------------------------------------------------*/

/*# Components--------------------------------------------------------------*/

/* Navigation--------------------------------------------- */
.nav-link{
  color: var(--primary);
  text-decoration: none;
  margin: 0.5rem;
  padding: 0.5rem;
  border-radius: 0.5rem;
  transition: all 0.4s linear;
}
#main-nav{
}
.nav-link:hover{
  background-color: var(--third);
box-shadow: 5px 5px 8px 0 #808080;
  transition: all 0.4s linear;
}
.main-navigation ul {
  list-style: none;
  display: flex;
  justify-content: center;
  align-items: center;
}

.main-navigation ul ul {
  box-shadow: 0 3px 3px rgba(0, 0, 0, 0.2);
  float: left;
  position: absolute;
  top: 100%;
  left: -999em;
  z-index: 2;
}

.main-navigation ul ul ul {
  left: -999em;
  top: 0;
}

.main-navigation ul ul li:hover > ul,
.main-navigation ul ul li.focus > ul {
  display: block;
  left: auto;
}

.main-navigation ul ul a {
  width: 200px;
}

.main-navigation ul li:hover > ul,
.main-navigation ul li.focus > ul {
  background-color: var(--third);
box-shadow: 5px 5px 8px 0 #808080;
  transition: all 0.4s linear;
}

.main-navigation li {
    color: var(--primary);
  text-decoration: none;
  margin: 0.5rem;
  padding: 0.5rem;
  border-radius: 0.5rem;
  transition: all 0.4s linear;
}

.main-navigation a {
    color: var(--primary);
  text-decoration: none;
  margin: 0.5rem;
  padding: 0.5rem;
  border-radius: 0.5rem;
  transition: all 0.4s linear;
}

/* Small menu. */
.menu-toggle,
.main-navigation.toggled ul {
  display: block;
}

@media screen and (min-width: 37.5em) {

  .menu-toggle {
    display: none;
  }

  .main-navigation ul {
    display: flex;
  }
}

.site-main .comment-navigation,
.site-main
.posts-navigation,
.site-main
.post-navigation {
  margin: 0 0 1.5em;
}

.comment-navigation .nav-links,
.posts-navigation .nav-links,
.post-navigation .nav-links {
  display: flex;
}

.comment-navigation .nav-previous,
.posts-navigation .nav-previous,
.post-navigation .nav-previous {
  flex: 1 0 50%;
}

.comment-navigation .nav-next,
.posts-navigation .nav-next,
.post-navigation .nav-next {
  text-align: end;
  flex: 1 0 50%;
}

/* Posts and pages--------------------------------------------- */
.sticky {
  display: block;
}

.post,
.page {
  margin: 0 0 1.5em;
}

.updated:not(.published) {
  display: none;
}

.page-content,
.entry-content,
.entry-summary {
  margin: 1.5em 0 0;
}

.page-links {
  clear: both;
  margin: 0 0 1.5em;
}

/* Comments--------------------------------------------- */
.comment-content a {
  word-wrap: break-word;
}

.bypostauthor {
  display: block;
}

/* Widgets--------------------------------------------- */
.widget {
  margin: 0 0 1.5em;
}

.widget select {
  max-width: 100%;
}

/* Media--------------------------------------------- */
.page-content .wp-smiley,
.entry-content .wp-smiley,
.comment-content .wp-smiley {
  border: none;
  margin-bottom: 0;
  margin-top: 0;
  padding: 0;
}

/* Make sure logo link wraps around logo image. */
.custom-logo-link {
  display: inline-block;
}

/* Captions--------------------------------------------- */
.wp-caption {
  margin-bottom: 1.5em;
  max-width: 100%;
}

.wp-caption img[class*="wp-image-"] {
  display: block;
  margin-left: auto;
  margin-right: auto;
}

.wp-caption .wp-caption-text {
  margin: 0.8075em 0;
}

.wp-caption-text {
  text-align: center;
}

/* Galleries--------------------------------------------- */
.gallery {
  margin-bottom: 1.5em;
  display: grid;
  grid-gap: 1.5em;
}

.gallery-item {
  display: inline-block;
  text-align: center;
  width: 100%;
}

.gallery-columns-2 {
  grid-template-columns: repeat(2, 1fr);
}

.gallery-columns-3 {
  grid-template-columns: repeat(3, 1fr);
}

.gallery-columns-4 {
  grid-template-columns: repeat(4, 1fr);
}

.gallery-columns-5 {
  grid-template-columns: repeat(5, 1fr);
}

.gallery-columns-6 {
  grid-template-columns: repeat(6, 1fr);
}

.gallery-columns-7 {
  grid-template-columns: repeat(7, 1fr);
}

.gallery-columns-8 {
  grid-template-columns: repeat(8, 1fr);
}

.gallery-columns-9 {
  grid-template-columns: repeat(9, 1fr);
}

.gallery-caption {
  display: block;
}

/*# Plugins--------------------------------------------------------------*/

/* Jetpack infinite scroll
--------------------------------------------- */

/* Hide the Posts Navigation and the Footer when Infinite Scroll is in use. */
.infinite-scroll .posts-navigation,
.infinite-scroll.neverending .site-footer {
  display: none;
}

/* Re-display the Theme Footer when Infinite Scroll has reached its end. */
.infinity-end.neverending .site-footer {
  display: block;
}

/*# Utilities--------------------------------------------------------------*/

/* Accessibility--------------------------------------------- */

/* Text meant only for screen readers. */
.screen-reader-text {
  border: 0;
  clip: rect(1px, 1px, 1px, 1px);
  clip-path: inset(50%);
  height: 1px;
  margin: -1px;
  overflow: hidden;
  padding: 0;
  position: absolute !important;
  width: 1px;
  word-wrap: normal !important;
}

.screen-reader-text:focus {
  background-color: #f1f1f1;
  border-radius: 3px;
  box-shadow: 0 0 2px 2px rgba(0, 0, 0, 0.6);
  clip: auto !important;
  clip-path: none;
  color: #21759b;
  display: block;
  font-size: 0.875rem;
  font-weight: 700;
  height: auto;
  left: 5px;
  line-height: normal;
  padding: 15px 23px 14px;
  text-decoration: none;
  top: 5px;
  width: auto;
  z-index: 100000;
}

/* Do not show the outline on the skip link target. */
#primary[tabindex="-1"]:focus {
  outline: 0;
}

/* Alignments--------------------------------------------- */
.alignleft {

  /*rtl:ignore*/
  float: left;

  /*rtl:ignore*/
  margin-right: 1.5em;
  margin-bottom: 1.5em;
}

.alignright {

  /*rtl:ignore*/
  float: right;

  /*rtl:ignore*/
  margin-left: 1.5em;
  margin-bottom: 1.5em;
}

.aligncenter {
  clear: both;
  display: block;
  margin-left: auto;
  margin-right: auto;
  margin-bottom: 1.5em;
}

body {
  font-family: sans-serif;
  background-color: var(--primary);
  margin:0;
}
.flex-center{
  display: flex;
  justify-content: center;
  align-items: center;
}
.row{
  flex-flow: row wrap;
  -ms-flex-flow: row wrap;
}
.column{
  flex-flow: column wrap;
  -ms-flex-flow: column wrap;
}
#main-header{
 position: fixed;
  top:0;
  left:0;
  z-index: 2;
  width: 100%;
  padding: 0.5rem;
  justify-content: space-between;
  background-color: var(--fifth);
  color: var(--primary);
  text-align: center;
}
.logo{}
.logo img{
  width: 3rem;
  height: 3rem;
  border-radius: 50%;
  margin: 1rem;
}
.logo p{
  font-size: 2rem;
  margin: 1rem;
}
#main-hero{
  height: 50%;
  padding: 1rem;
  background: linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.7)), url("./img/wordpress.webp");
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
  margin-top: 6rem;
}
.hero-content{
  color: var(--primary);
  text-align: center;
  padding: 1rem;
}
.btn{
  display: inline-block;
  padding: 0.5rem 1rem;
  margin: 1rem;
  border-radius: 0.5rem;
  text-decoration: none;
  color: var(--primary);
  background-color: var(--third);
  transition: all 0.4s linear;
}
.btn:hover{
  background-color: var(--fourth);
  transition: all 0.4s linear;
  box-shadow: 5px 5px 8px 0 #808080;
}
#features{
  padding: 1rem;
}
.feature-item{
  width: 20rem;
  padding: 1rem;
  margin: 1rem;
  border-radius: 0.5rem;
  background-color: var(--third);
   box-shadow: 5px 5px 8px 0 #808080;
  transition: all 0.4s linear;
}
.feature-svg{
  width: 5rem;
  height: 5rem;
  margin: 1rem;
}
#projects{
  padding: 1rem;
  background: var(--secondary);
}
#projects a{
  text-decoration: none;
}
.project-info{
  width: 100%;
  padding: 1rem;
  margin: 1rem;
  border-radius: 0.5rem;
  background-color: var(--third);
  box-shadow: 5px 5px 8px 0 #808080;
  transition: all 0.4s linear;
}
.project-grid{}
.project-card{
  width: 20rem;
  padding: 1rem;
  margin: 1rem;
  border-radius: 0.5rem;
  background-color: var(--third);
  box-shadow: 5px 5px 8px 0 #808080;
  transition: all 0.4s linear;
}
.project-img{
  width: 100%;
  height: 100%;
  border-radius: 0.5rem;
}
.project-title{
  text-align: center;
  margin: 0.5rem;
}
.project-description{
  text-align: center;
  margin: 0.5rem;
}
#contact{
  padding: 1rem;
  background: linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.7)), url("./img/contact.webp");
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
  margin-top: 3rem;
}
.contact-info{
  width: 100%;
  margin: 0.5em;
  padding: 0.5em;
}
.contact-form, .contact-social{
  width: 35rem;
  padding: 1rem;
  margin: 1rem;
  border-radius: 0.5rem;
  background-color: var(--third);
  box-shadow: 5px 5px 8px 0 #808080;
  transition: all 0.4s linear;
}
#footer{
  padding: 1rem;
  background: var(--secondary);
}
.footer-content{
  padding: 1rem;
  margin: 1rem;
  border-radius: 0.5rem;
  background-color: var(--third);
  box-shadow: 5px 5px 8px 0 #808080;
}
