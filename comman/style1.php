<style>
body
{
	margin: 0px;
	padding: 0px;
	background: #f5f5f5;
	font-family: 'Roboto', sans-serif;
}
.top
{
	width: 100%;
	height: 90px;
	background: #FFF;
	border-bottom: 1px solid #ddd;
	position: fixed;
	z-index: 10000;
}
.topmain
{
	width: 1100px;
	height: 100%;
	margin: auto;
}
.logo
{
	width: 200px;
	height: 100%;
	float: left;
}
.menu
{
	width: 850px;
	height: 50px;
	float: right;
	margin-top: 25px;
}
.menu ul
{
	list-style: none;
	margin: 0px;
	padding: 0px;
}
.menu li
{
	float:right;
}
.menu li a
{
	padding: 0px 10px 0px 10px;
	height: 40px;
	line-height: 40px;
	display: block;
	color: orange;
	text-decoration: none;
	text-transform: uppercase;
	font-size: 1em;
}
.menu a:hover
{
	background: #b75b00;
	color: #FFF;
}
.menu ul ul
{
	background: #FFF;
	box-shadow: 0px 1px 5px #000;
	border-radius: 0px 0px 2px 2px;
	visibility: hidden;
	position: absolute;
}
.menu li li
{
	float: none;
}
.menu li:hover ul
{
	visibility: visible;
}
.account
{
	border: 2px solid #b75b00;
	border-radius: 100%;
	width: 50px;
	height: 48px;
	cursor: pointer;
}
.account img
{
	width: 50px;
	height: 48px;
	border-radius: 100%;
}
.main
{
	width: 1100px;
	min-height: 100px;
	border-radius: 2px;
	margin: auto;
	top: 120px;
	position: relative;
}
.clear{clear: both;}
.profile
{
	width: 700px;
	min-height: 200px;
	background: #FFF;
	float: left;
	padding: 20px;
	border-radius: 2px;
	border: 1px solid #ddd;
}
.table
{
	width: 100%;
	font-size: 1.1em;
	border-bottom: 1px solid #ddd;
	border-collapse: collapse;
}
.table td
{
	border-bottom: 1px solid #ddd;
	border-collapse: collapse;
	padding-left: 10px;
	height: 40px;

}
.profilebox
{
	width: 100%;
	height: 200px;
}
.pic
{
	width: 160px;
	height: 160px;
	border-radius: 100%;
	float: left;
}
.pic img
{
	width: 160px;
	height: 160px;
	border-radius: 100%;
}
.name
{
	width: 500px;
	font-size: 1.8em;
	padding: 20px 0px 20px 20px;
	margin-top: 20px;
	float: left;
	text-transform: capitalize;
}
.address
{
	width: 500px;
	font-size: 1.1em;
	padding: 0px 0px 0px 20px;
	float: left;
}
span
{
	font-size: 1.4em;
	font-weight:bold;
	margin-bottom: 10px;
	display: block;
}
p{
	font-size: 1.1em;
	text-align: justify;
}

.container
{
	width: 300px;
	min-height: 400px;
	float: right;
}
.box
{
	width: 260px;
	min-height: 100px;
	background: #FFF;
	padding: 20px;
	border-radius: 2px;
	margin-bottom: 10px;
	color: #444;
	border: 1px solid #ddd;
}
.one
{
	width: 60px;
	height: 70px;
	text-align: center;
	line-height: 60px;
	color: skyblue;
	font-size: 3em;
	float: left;
}
.two
{
	width: 160px;
	float: left;
	font-size: 2em;
	padding-left: 20px;
	color: blue;
}
.three
{
	width: 160px;
	padding-left: 20px;
	float: left;
	font-size: 1.8em;
}
.four
{
	width: 220px;
	padding-left: 20px;
	float: left;
	font-size: 1em;
}
.form
{
	padding: 20px;
	background: #FFF;
	border-radius: 0px 0px 2px 2px;
	border: 1px solid #ddd;
	border-top: none;
	min-height: 400px;
}
.hedding
{
	font-size: 1.7em;
	padding: 20px;
	border-radius: 2px 2px 0px 0px;
	background: #FFF;
	border: 1px solid #ddd;
}
.formbox
{
	width: 600px;
	float: left;
}
.preview
{
	width: 400px;
	height: 300px;
	border: 1px solid #ddd;
	float: right;
	text-align: center;
	color: #eee;
	font-size: 3em;
	border-radius: 2px;
}
.preview img
{
	width: 400px;
	height: 300px;
	border-radius: 2px;
}
.form table
{
	font-size: 1em;
	width: 100%;
	border-collapse: collapse;
	border: 1px solid #ddd;

}
.form td
{
	height: 40px;
	padding-left: 10px;
	border-color: #ddd;
}
.tr{font-weight: bold; background: #eee;}
.form input, textarea, select
{
	width: 300px;
	height: 35px;
	border: 1px solid #ddd;
	border-radius: 2px;
	margin: 10px;
	font-size: .9em;
	padding-left: 10px;
	font-family: 'Roboto', sans-serif;
	color: #444;
}
.form textarea
{
	width: 500px;
	height: 180px;
	padding: 10px;
}
.form input[type=submit]
{
	margin-top: 40px;
	width: 200px;
	height: 45px;
	background: #b75b00;
	padding: 0px;
	color: #FFF;
	cursor: pointer;
	border: none;
}
.galbox
{
	width: 250px;
	height: 290px;
	border: 1px solid #ddd;
	border-radius: 2px;
	margin: 6px;
	float: left;
}
.galbox img
{
	width: 250px;
	height: 200px;
}
.gallname
{
	width: 240px;
	height: 40px;
	margin-bottom: 10px;
	font-size: 1.2em;
	line-height: 40px;
	padding-left: 10px;
	text-transform: capitalize;
}
.galbox a
{
	font-size: 1.2em;
	margin-left: 10px;
	text-decoration: none;
}
.form a:hover
{
	color: #2d2dff;
}
.table a
{
	color: #444;
	text-decoration: none;
}

.searchform
{
	width: 1060px;
	height: 80px;
	margin-bottom: 20px;
	border-radius: 2px;
	background: #eee;
}
.searchform input[type=search]
{
	font-size: 1em;
	padding-left: 10px;
	font-family: 'Roboto', sans-serif;
	color: #444;
	width: 485px;
	height: 40px;
	margin: 20px;
}
.found
{
	color: red;
	text-align:center;
}


.footer
{
	line-height: 100px;
	font-size: 1.2em;
	color: #444;
	text-align: center;
}




/* -------------- Pagination ----------&*/

.pagination
{
	width: 100%;
	text-align: center;
	padding-top: 50px;
}
ul.setPaginate li.setPage{
	padding:10px;
	font-size:1em;
	margin-bottom: 10px;
	}

	ul.setPaginate{
	margin:0px;
	padding:0px;
	height:100%;
	overflow:hidden;
	font-size: 1.1em;
	list-style-type:none;
	}  

	ul.setPaginate li.dot{padding: 3px 0;}

	ul.setPaginate li{
	float:left;
	margin:0px;
	padding:0px;
	margin-left:5px;
	}

	ul.setPaginate li a
	{
	background: none repeat scroll 0 0 #ffffff;
	border: 1px solid #cccccc;
	color: #999999;
	display: inline-block;
	font-size: .9em;
	margin: 5px 3px 0 0;
	padding: 0 5px;
	text-align: center;
	text-decoration: none;
	border-radius: 2px;
	}	

	ul.setPaginate li a:hover,
	ul.setPaginate li a.current_page
	{
	background: none repeat scroll 0 0 #0d92e1;
	border: 1px solid #0d92e1;
	color: #ffffff;
	text-decoration: none;
	}

	ul.setPaginate li a{
	color:black;
	display:block;
	text-decoration:none;
	padding:5px 8px;
	text-decoration: none;
	}
</style>