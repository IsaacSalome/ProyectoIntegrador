$color: #000;
$color-bg: #c0c0c0;

/* ---------- FONTAWESOME ---------- */
/* ---------- https://fortawesome.github.com/Font-Awesome/ ---------- */
/* ---------- http://weloveiconfonts.com/ ---------- */

@import url(http://weloveiconfonts.com/api/?family=fontawesome);

/* ---------- ERIC MEYER'S RESET CSS ---------- */
/* ---------- https://meyerweb.com/eric/tools/css/reset/ ---------- */

@import url(https://meyerweb.com/eric/tools/css/reset/reset.css);

/* ---------- FONTAWESOME ---------- */

[class*="fontawesome-"]:before {
  font-family: 'FontAwesome', sans-serif;
}

/* ---------- GENERAL ---------- */

* {
  box-sizing: inherit  
}

html {
  box-sizing: border-box;
  height: 100%;
}

body {
	background: $color-bg;
	color: $color;
  font-family: 'Varela Round', sans-serif;
  line-height: 1.5;
  margin: 0;
  min-height: 100%;
}

input {
  background-image: none;
  border: none;
  font: inherit;
  margin: 0;
  padding: 0;
  transition: all .3s;
}

/* ---------- ALIGN ---------- */

.align {
  align-items: center;
  display: flex;
  flex-direction: column;
  justify-content: center;
}

/* ---------- GRID ---------- */

.grid {
  margin-left: auto;
  margin-right: auto;
  max-width: 90%;
  width: 400px;
}

/* ---------- LOGIN ---------- */

#login h2 {
	background: #f95252;
	border-radius: 20px 20px 0 0;
	color: #fff;
	font-size: 28px;
	padding: 20px 26px;
}

#login h2 span[class*="fontawesome-"] {
	margin-right: 14px;
}

#login fieldset {
	background: #fff;
	border-radius: 0 0 20px 20px;
	padding: 20px 26px;
}

#login fieldset p {
	color: #777;
	margin-bottom: 14px;
}

#login fieldset p:last-child {
	margin-bottom: 0;
}

#login fieldset input {
	border-radius: 3px;
}

#login fieldset input[type="email"], #login fieldset input[type="password"] {
	background: #eee;
	color: #777;
	padding: 4px 10px;
	width: 100%;
}

#login fieldset input[type="submit"] {
	background: #33cc77;
	color: #fff;
	display: block;
	margin: 0 auto;
	padding: 4px 0;
	width: 100px;
}

#login fieldset input[type="submit"]:hover {
	background: #28ad63;
}