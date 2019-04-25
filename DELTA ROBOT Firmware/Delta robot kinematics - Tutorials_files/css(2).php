@charset "UTF-8";
/* CSS Document */
/* TOOLS MENU */
/* convert to stylevars pls */

.toolsmenu {
	background: #D0D0D0 none   ;
	width: 100%;
	display: block;
	border: 1px solid #333333;
	float: left;
	clear: both;
	margin: 0.5em 0;
}

.toolsmenu div {
	text-align: right;
	color: #000000;
	width: 100%;
	clear: both;
	float: left;
}

.toolsmenu h1 {
	font-size:14px;
	font-weight:bold;
	margin-top: 0.25em;
	text-align: left;
	display: inline;
	float: left;
	margin-left: 10px;
}

.toolsmenu h1 a {
	color: #000000;
}

.toolsmenu ul {
	padding: 5px 0;
	float: right;
	margin-right: 10px;
}

.toolsmenu .nopopupgroup li {
	float: left;
	margin-left: 10px;
}

.toolsmenu .popupgroup a.popupctrl, .toolsmenu .popupgroup .popupmenu a.popupctrl, .toolsmenu .nopopupgroup li a {
	font-size: 11px;
	color: #000000;
	display:block;
	_display:inline;
	float: left;
	clear: right;
	padding: 0.2em 0.4em;
}

.toolsmenu .popupgroup a.popupctrl, .toolsmenu .popupgroup .popupmenu a.popupctrl, .toolsmenu .popupgroup .popupmenu:hover a.popupctrl, .toolsmenu .popupgroup .popupmenu:hover .popupctrl a.popupctrl.active {
	border: 0;
	color: #000000;
	padding-right: 15px;
}

.toolsmenu li {
	position: relative;
	display:block;
	clear: right;
}

.toolsmenu .popupgroup ul {
	text-align: left;
	float: left;
}

.toolsmenu .popupgroup .popupbody {
	padding:2px;
}

.toolsmenu .menuimage, .toolsmenu li a.menuimage {
	padding-left: 20px;
	color: #4e4e4e;
}

.toolsmenu .nopopupgroup li a, .toolsmenu .menuimage a.popupctrl {
	color: #4e4e4e;
        font-weight: bold;
}

.toolsmenu .nopopupgroup li a:hover, .toolsmenu .menuimage a.popupctrl:hover {
	color: #417394;
}

.menusearch.popupmenu .popupbody {
	min-width:240px;
	max-width:240px;
	font-size: 11px;
	left: -100px;
}

.menusearch input.button {
	float: right;
	top: 0;
}

.menusearch .submitoptions {
	width: 50%;
	float: left;
	text-align: left;
	clear: right;
}

.menusearch .formsubmit .advancedsearchlink {
	width: 50%;
	float: left;
	clear: right;
}

.toolsmenu .popupgroup .popupbody a, .toolsmenu .popupgroup .popupbody li label {
	font-size: 11px;
}

.toolsmenu .popupgroup .popupbody li {
	width: 100%;
}

.toolsmenu .popupgroup .popupbody form ul  {
	width: 100%;
}


/* CSS Document */

.pagetitle {
	width: 100%;
}

.postlist {
 /* ie6-only hack */
  _border:1px solid rgb(233, 233, 233);
}

.popupbody .rating {
	display:block;
	padding:0px;
	padding-left:75px;
	background:transparent url(http://forums.trossenrobotics.com/images/rating/rating-15_0.png) left center no-repeat;
}

.popupbody .r5 { background-image:url(http://forums.trossenrobotics.com/images/rating/rating-15_5.png); }
.popupbody .r4_right { background-image:url(http://forums.trossenrobotics.com/images/rating/rating-15_4.png); }
.popupbody .r3_right { background-image:url(http://forums.trossenrobotics.com/images/rating/rating-15_3.png); }
.popupbody .r2_right { background-image:url(http://forums.trossenrobotics.com/images/rating/rating-15_2.png); }
.popupbody .r1_right { background-image:url(http://forums.trossenrobotics.com/images/rating/rating-15_1.png); }

/*RTL rating*/
.popupbody .r4_left { background-image:url(http://forums.trossenrobotics.com/images/rating/rating-15_4_left.png); }
.popupbody .r3_left { background-image:url(http://forums.trossenrobotics.com/images/rating/rating-15_3_left.png); }
.popupbody .r2_left { background-image:url(http://forums.trossenrobotics.com/images/rating/rating-15_2_left.png); }
.popupbody .r1_left { background-image:url(http://forums.trossenrobotics.com/images/rating/rating-15_1_left.png); }
.searchthread.popupmenu .popupbody {
	width:236px;
}

.searchthread.popupmenu .popupbody input.searchbox{
	margin-top:1px;
	margin-bottom:3px;
}

.searchthread.popupmenu .popupbody input.button{
	float:right;
	top:0;
}

.qrcontainer.blockfoot {
	padding-top: 0;
	-moz-border-radius-topright: 5px;
	-moz-border-radius-topleft: 5px;
	-webkit-border-top-right-radius: 5px;
	-webkit-border-top-left-radius: 5px;
	border-top-right-radius: 5px;
	border-top-left-radius: 5px;
}

.formcontrols .openclose, .formcontrols .stickunstick, .formcontrols .showsignature {
	padding:5px;
}

/* ADS First and Last Post */
#ad_thread_first_post_content {
     float:right;
}
#ad_thread_last_post_content {
     float:right;
}


/* Threaded Mode */
#posttree {
	height:150px;
	overflow:auto;
	padding:2px;
	text-align:left;
	border: 0  #CCCCCC;
	border-top:0;
	white-space:nowrap;
}

#posttree .poston {
	background: #FFFFFF none   ;
}

#posttreee .postoff {

}

#threaded_view h4 {
	background: #0E5C76 url(images/buttons/newbtn_middle.png) repeat-x  ;
	border: 1px solid #333333;
	color: #ffffff;
	font:   normal 12px Tahoma,Calibri,Verdana,Geneva,sans-serif;
	padding: 4px;
}

a.firstunread {
	background: url(http://forums.trossenrobotics.com/images/buttons/firstnew.png) right center no-repeat;
	padding: 0 4px;
	padding-right: 15px;
	font-size:11px;
	border:1px solid transparent;
	margin-left:5px;
	text-decoration:none;
	display: inline-block;
}

#tag_edit_form .formcontrols {
	border-top: 1px solid #333333;
}

#collapse_wrt_list {
	position: inherit;
}


/* CSS Document */

.postlist, #postlist {
	clear:both;
	margin-top:5px;
	margin-bottom:10px;
	position:relative;
	_height: 1%;
	_zoom: 1;
}


.above_postlist, #above_postlist {
	width:100%;
	position:relative;
	left:0;
	float: left;
	margin-top: 5px;
	height: 32px;
	_height: 1%;
	_zoom: 1;
}

.posts, #message_list {
	margin:10px 0;
}

#inlinemod_formctrls ul {
	left:auto;
	right:0;
}

.postlist_navpopup {
	clear:both;
	margin-top:2em;
}

.qr_require_click {
	display: none;
}

form#quick_reply {
	max-width:100%;
}

form#quick_reply .actionbuttons .group {
	max-width:100%;
}

form#quick_reply textarea {
	height:100px;
}

.above_postlist .newcontent_textcontrol {
	margin-top: 5px;
	position: relative;
	_display:inline;
}

#pagination_postlist_bottom {
	float:left;
}

.pagination_top {
	width: 60%;
	float: right;
	position: relative;
	margin-top: 5px;
	right: 0;
}

.above_postlist .pagination_top .pagination, .above_postlist .pagination_top .postpagestats {
	float: right;
	clear:left;
	vertical-align:middle;
	font-size: 12px;
	color: #000000;
	_display:inline;
}

.postpagestats {
	margin-top: -1px; 
	vertical-align:inherit;
}
	
.pagination_top .pagination {
	margin-left: 10px;
	position: relative;
	top: -3px;
}

.postlistfoot {
	display:block;
	width: 100%;
        height: 2em;
        clear:both;
        position: relative;
}

.below_postlist {
	display:block;
	clear:both;
	position: relative;
	float: right;
	margin-top: 45px;
	margin-bottom: 1em;
	width: 100%;
}
.noinlinemod.below_postlist {
	margin-top: -2.5em;
}
.discussionlist + .below_postlist {
	margin-bottom: 20px;
}

.below_postlist .pagination_bottom {
	float: right;
	margin-top: 5px;
	width: 100%;
}

.below_postlist .pagination_bottom .pagination {
	float: right;
	clear: left;
	margin-left: 5px;
	position: relative;
        margin-bottom: 1em;
}

.below_postlist .newcontent_textcontrol {
	position: absolute;
	top: -2.5em;
}
.noinlinemod.below_postlist .newcontent_textcontrol {
	top: 0em;
}



/* CSS Document */

/* last edited notice */
.lastedited {
	font-style:italic;
	padding-top: 1em;
	color: #000000;
	font-size: 11px;
/*	clear:both; */
}

.lastedited a {
	color: #000000;
}
/* reputation image */
.postbit_reputation {
	clear: both;
	display: block;
	font-size: 0;
	padding-left: 2px;
}

img.repimg {
    display: inline;
    margin-left: -2px;
}

.quickedit {
border-top: 1px solid #333333;
}
/*signature */
.signature {
        padding-top: 1em;
	border-top: 1px solid #dddddd;
        margin-top: 2em;
}


/*post bit*/
.postbit, .postbitlegacy, .eventbit {
	margin-bottom: 10px;
	display:block;
	width: 100%;
	clear:both;
	position: relative;
	float: left;
	color: #000000;
	border: 1px solid #333333;
}

.postbit object {
	clear:both; 
}

.postbit .postdetails {
	width: 100%;
	display:block;
	float: left;
}

.postrow {
	overflow: auto;
}

.postbit .posthead, .postbitlegacy .posthead, .eventbit .eventhead {
	background: #0E5C76 url(images/buttons/newbtn_middle.png) repeat-x  ;
	_background-image: none;
	border: 1px solid #333333;
	clear:both;
	display:block;
	float: left;
	width: 100%;
	color: #ffffff;
	margin: -1px -1px 0;
	font:   normal 12px Tahoma,Calibri,Verdana,Geneva,sans-serif;
	padding: 4px 0;
}

.postbit .posthead .postdate, .postbitlegacy .posthead .postdate {
            display:block;
            float:left;
            clear:right;
            width: 49%;
            margin-left: 10px;
            font:   normal 12px Tahoma,Calibri,Verdana,Geneva,sans-serif;
            padding-left: 15px;
}

.postbit .posthead .postdate.old, .postbitlegacy .posthead .postdate.old {
            background:transparent url(http://forums.trossenrobotics.com/images/statusicon/post_old.png) no-repeat center left;
}

.postbit .posthead .postdate.new, .postbitlegacy .posthead .postdate.new {
            background:transparent url(http://forums.trossenrobotics.com/images/statusicon/post_new.png) no-repeat center left;
}

.postbit .postdate .time {
	color: #ffffff;
	margin-left: 10px;
}

.postbithead .postdate .time {
	color: #000000;
}

.postbit .userinfo .contact, .postbit .userinfo_noavatar .contact {
	position: relative;
	float: left;
	clear: right;
	width: 50%;
	display:block;
}
.postbit .postuseravatarlink {
	display:block; 
	text-align: center;
	position: relative;
	top: 0;
	margin-left: 15px;
	float: left;
	clear: right;
}

.postbit .postuseravatarlink img {
}


.postbit .nodecontrols .postimod{
	top: 0;
	position:relative;
	margin-left: 10px;
}

.postbit .userinfo, .postbit .userinfo_noavatar {
	background: #DEDEDE none   ;
	_background-image: none;
	clear:both;
	height: auto !important;
	border-bottom:1px solid #333333;
	padding: 0.5em 0;
	width: 100%;
	float: left;
}

.postbit .userinfo .contact, .userinfo .userinfo_extra, .postbit .userinfo_noavatar .contact {
	display:inline-block;
	height: auto !important;
}
.postbit .username_container {
 	float: left;
 	clear: right;
 	display:block;
 	margin-left: 10px;
}
.postbit .userinfo .username_container .memberaction, .postbit .userinfo_noavatar .username_container .memberaction {
 	display: inline;
}

.postbit .postdetails_noavatar .posthead, .postbit .postdetails_noavatar .userinfo .contact {
	margin-left: 0;
}

.postbit .userinfo .username, .postbit .userinfo_noavatar .username {
	font-size: 13px;
	font-weight: bold;
}

.postbit .userinfo_noavatar .imlinks img {
	display:inline;
}
.postbit .userinfo .username.guest, .postbit .userinfo_noavatar .username.guest {
	font-weight:normal;
}

.postbit .userinfo_noavatar .usertitle, .postbit .userinfo .usertitle, .postbit .userinfo_noavatar .rank, .postbit .userinfo .rank {
	font-size: 11px;
	font-weight: bold;
	display:block;
	clear:both;
}
.postbit .userinfo .userinfo_extra, .postbit .userinfo_noavatar .userinfo_extra {
	text-align: right;
	width: 300px;
	float: right;
	font-size: 11px;
}

.postbit .userinfo .userinfo_extra dl, .postbit .userinfo_noavatar .userinfo_extra dl {
	margin-right: 10px;
	float: right;
	width: 150px;
}

.postbit .userinfo_extra dl dt {
	float:left;
	display:block;
	margin-right: 5px;
}

.postbit .userinfo_extra dl dt:after  {
	content:":";
}
.postbit .userinfo_extra dl dt.blank:after {
	content:none;
}
.postbit .userinfo_extra dl dd {
	display:block;
}

.postbit .userinfo .moreinfo, .postbit .userinfo_noavatar .moreinfo {
	float: left;
	display: inline;
}

.postbit .userinfo .popupmenu a.popupctrl, .postbit .userinfo_noavatar .popupmenu a.popupctrl {
	font-size: 12px;
	background: transparent;
	padding: 0;
	display:inline-block;
}

.postbit .userinfo .popupmenu a.popupctrl:hover, .postbit .userinfo_noavatar .popupmenu a.popupctrl:hover {
	color: #0E5C76;
	text-decoration: ;
}

.postbit .postbody {
	clear: both;
	color: #000000;
	background: #DEDEDE none   ;
}

.postrow blockquote ul, .postrow blockquote ol, .postrow blockquote dl {
	margin:0 40px;
}

.postbit .postrow {
	font-family: Verdana,Arial,Tahoma,Calibri,Geneva,sans-serif;
}
.postbit .postrow {
	padding: 5px 10px 3em;
	font:    13px Verdana,Arial,Tahoma,Calibri,Geneva,sans-serif;
}
.postbit hr {
	display:none;
}

.postcontent {
	word-wrap: break-word;
}


.postbit .posttitle {
	display:block;
	padding: 10px;
	font-weight:bold;
	font:   bold 14px Tahoma,Calibri,Verdana,Geneva,sans-serif;
	margin: 0;
}

/*postbit legacy*/

.postbitlegacy hr, .eventbit hr {
	display: none;
}

blockquote.restore hr {
	display: block;
}

.postbitlegacy .postdetails, .eventbit .eventdetails {
	float: left;
	width: 100%;
	background: #DEDEDE none   ;
	_background-image: none;
}

.postbitlegacy .posthead .time {
	font:   normal 12px Tahoma,Calibri,Verdana,Geneva,sans-serif;
	color: #ffffff;
}

.postbit .posthead .nodecontrols, .postbitlegacy .posthead .nodecontrols, .eventbit .eventhead .nodecontrols {
	position: absolute;
	color: #ffffff;
	right: 0;
	top: 0;
	width: 50% ;
	padding: 4px 10px 0;
	text-align: right;
	font:   normal 12px Tahoma,Calibri,Verdana,Geneva,sans-serif;
	vertical-align: middle;
}

.postbit .posthead .nodecontrols a, .postbitlegacy .posthead .nodecontrols a, .eventbit .eventhead .nodecontrols a {
	color: #ffffff;
        top: -2px;
        position:relative;
}

.postbitlegacy .posthead .nodecontrols img, .eventbit .eventhead .nodecontrols img {
	position: relative;
	top: 2px;
	padding: 0;
}

.postbitlegacy .posthead .nodecontrols .postimod, .eventbit .eventhead .nodecontrols .postimod {
	top: 0px;
	position:relative;
	margin-left: 5px;
}

.postbitlegacy .postbody, .eventbit .eventdetails .eventbody {
	margin-left: 200px;
	border-left: 1px solid #333333;
	background: #DEDEDE none   ;
	_background-image: none;
	padding-bottom: 1em;
}

.postbitlegacy .postrow, .eventbit .eventrow, .postbitdeleted .postrow, .postbitignored .postrow {
	padding: 5px 10px 10px;
	font:    13px Verdana,Arial,Tahoma,Calibri,Geneva,sans-serif;
	color: #000000;
}

.postbitlegacy .userinfo {
	float:left;
	position: relative;
	width:180px; 
	padding: 2px 10px 5px;
	font-size: 11px;
	display:block;
        background: #DEDEDE none   ;
	clear:both;
}

.postbitlegacy .userinfo .rank, .postbitlegacy .userinfo .usertitle {
	font-size: 11px;
	display:block;
	clear:both;
}

.postbitlegacy .userinfo .username_container {
	margin-bottom: 8px;
}


.postbitlegacy .userinfo .username_container .memberaction {
	display: inline;
}

.postbitlegacy .userinfo .postuseravatar, .eventbit .userinfo .eventuseravatar {
	display:block;
	margin:3.33333333333px auto 0;
	text-align:left;
	width: auto;
	float: left;
	clear: both;
}

.postbitlegacy .userinfo .postuseravatar img, .eventbit .userinfo .eventuseravatar img {
 	max-width: 180px;
}

.postbitlegacy .userinfo a.username, .eventbit .userinfo a.username {
	clear:right;
	font-size:13px;
	font-weight:bold;
	width: auto;
	max-width:160px;
	word-wrap:break-word;
}

.postbitlegacy .userinfo .guest.username, .eventbit .userinfo .guest.username {
	padding-top: 5px;
	display:block;
	font-size: 13px;
}

.postbitlegacy dl.userinfo_extra, .postbitlegacy dl.user_rep {
	margin: 5px 0;
	display:block;
	float: left;
	width: 180px; 
}
.postbitlegacy dl.userinfo_extra dt, .postbitlegacy dl.user_rep dt {
	float: left;
	text-align: left;
	/*color: #000000;*/
	margin-right: 10px;
	margin-left: 0;
	min-width:60px;
	width:auto !important;
	width:60px;
}

.postbitlegacy dl.userinfo_extra dt:after, .postbitlegacy dl.user_rep dt:after {
	content: ":";
}

.postbitlegacy dl.user_rep dt.blank:after {
	content: none;
}

.postbitlegacy dl.userinfo_extra dd, .postbitlegacy dl.userinfo_extra dd a, .postbitlegacy dl.user_rep dd {
	padding-bottom: 3px;
}

.postbitlegacy dl.user_rep img {
	margin-top: 10px;
}

.postbitlegacy .imlinks {
	width: 100%;
	float: left;
}

.postbitlegacy .imlinks img {
	display:inline;
}

.postbitlegacy .title, .eventbit .title {
	display:block;
	padding: 10px;
        padding-left: 0;
	font:   bold 14px Tahoma,Calibri,Verdana,Geneva,sans-serif;
}

.postbit .postfoot, .postbitlegacy .postfoot, .eventbit .eventfoot {
	display:block;
	position: relative;
	right: 0;
	float: left;
	clear:both;
	/*vertical-align: bottom;*/
	background: transparent;
	/*height: 26px;*/
	font:   bold 11px Tahoma, Calibri, Verdana, Geneva, sans-serif;
	width: 100%;
}

.postbitlegacy .postrow.has_after_content {
	padding-bottom: 4em;
}

.postbitlegacy .after_content {
	position: relative;
	width: 100%;
	clear:both;
}

.postbitlegacy .signature, .postbitlegacy .lastedited {
	margin-top: 1em;
	padding: 1em 10px 0;
}

.postbit .postfoot .textcontrols, .postbitlegacy .postfoot .textcontrols, .eventbit .eventfoot .eventcontrols {
	padding: 6px 0 4px;
	display:block;
	background: #D0D0D0 none   ;
	_background-image: none;
	font:   bold 11px Tahoma, Calibri, Verdana, Geneva, sans-serif;
	width: 100%;
	margin-right: 10px;
}
.postbitlegacy .postfoot  .postcontrols, .postbit .postfoot  .postcontrols {
	float:right;
	padding-right:10px;
	text-align:right;
	width:50%;
}

.postbitlegacy .postfoot .postlinking, .postbit .postfoot .postlinking {
	padding-left:10px;
}

.postbitlegacy .postfoot .textcontrols img.inline, .postbit .postfoot .textcontrols img.inline {
	position: absolute;
	top: 2px;
	left: -1px;
	margin-right: 1px;
}
.postbitlegacy .postfoot .textcontrols span.seperator, .postbit .postfoot .textcontrols span.seperator {
	border-right:  solid #333333;
	display: inline;
	margin: 0 5px;
}
.postbitlegacy .postfoot .textcontrols a, .postbit .postfoot .textcontrols a, .eventbit .eventfoot .eventcontrols a,
.postbitlegacy .postfoot .textcontrols span.mobile, .postbit .postfoot .textcontrols span.mobile {
	-moz-border-radius: 0px;
	-webkit-border-radius: 0px;
	border-radius: 0px;
	padding: 0;
	padding-left: 23px;
	border: 0px solid #333333;
	background: #CCCCCC;
	_background-image: none;
	color: #000000;
	font:   bold 11px Tahoma, Calibri, Verdana, Geneva, sans-serif;
	display:inline-block;
	/* margin needs to be left invariant of the text direction (LTR-RTL) */
	margin-left: 5px;
}

/* Text button hover images */
.postbitlegacy .postfoot .textcontrols img.spam, .postbit .postfoot .textcontrols img.spam  {
	padding-top: 2px;
}
.postbitlegacy .postfoot .textcontrols img.moderated, .postbit .postfoot .textcontrols img.moderated, .postbitlegacy .postfoot .textcontrols img.spam, .postbit .postfoot .textcontrols img.spam, .postbitlegacy .postfoot .textcontrols img.deleted_nolink, .postbit .postfoot .textcontrols img.deleted_nolink  {
	padding-top: 2px;
}
.postbitlegacy .postfoot .textcontrols a.editpost, .postbit .postfoot .textcontrols a.editpost, .eventbit .eventfoot .textcontrols a.editevent  {
	background: url(http://forums.trossenrobotics.com/images/buttons/edit_40b.png) no-repeat #CCCCCC left ;
        padding: 0px 0px 0px 0px;
	padding-left: 20px;
	border: 0px solid #333333;
}
.postbitlegacy .postfoot .textcontrols a.editpost:hover, .postbit .postfoot .textcontrols a.editpost:hover, .eventbit .eventfoot .textcontrols a.editevent:hover  {
	background: url(http://forums.trossenrobotics.com/images/buttons/edit_40b-hover.png) no-repeat  left;
	padding: 0px 0px 0px 0px;
	padding-left: 20px;
	border: 0px  ;
}
.postbitlegacy .postfoot .textcontrols a.quickreply, .postbit .postfoot .textcontrols a.quickreply, .postbitlegacy .postfoot .textcontrols a.forwardpost, .postbit .postfoot .textcontrols a.forwardpost  {
	background: url(http://forums.trossenrobotics.com/images/buttons/reply_40b.png) no-repeat #CCCCCC left;
	padding: 0px 0px 0px 0px;
	padding-left: 20px;
	border: 0px solid #333333;
}
.postbitlegacy .postfoot .textcontrols a.quickreply:hover, .postbit .postfoot .textcontrols a.quickreply:hover, .postbitlegacy .postfoot .textcontrols a.forwardpost:hover, .postbit .postfoot .textcontrols a.forwardpost:hover  {
	background: url(http://forums.trossenrobotics.com/images/buttons/reply_40b-hover.png) no-repeat  left;
	padding: 0px 0px 0px 0px;
	padding-left: 20px;
	border: 0px  ;
}
.postbitlegacy .postfoot .textcontrols a.newreply, .postbit .postfoot .textcontrols a.newreply  {
	background: url(http://forums.trossenrobotics.com/images/buttons/quote_40b.png) no-repeat #CCCCCC left;
	padding: 0px 0px 0px 0px;
	padding-left: 20px;
	border: 0px solid #333333;
}
.postbitlegacy .postfoot .textcontrols a.newreply:hover, .postbit .postfoot .textcontrols a.newreply:hover  {
	background: url(http://forums.trossenrobotics.com/images/buttons/quote_40b-hover.png) no-repeat  left;
	padding: 0px 0px 0px 0px;
	padding-left: 20px;
	border: 0px  ;
}
.postbitlegacy .postfoot .textcontrols a.multiquote, .postbit .postfoot .textcontrols a.multiquote  {
	background: url(http://forums.trossenrobotics.com/images/buttons/multiquote-back_40b.png) no-repeat #CCCCCC left;
	padding: 0px 0px 0px 0px;
	padding-left: 20px;
	padding-bottom:1px;
	border: 0px solid #333333;
}
.postbitlegacy .postfoot .textcontrols a.multiquote:hover, .postbit .postfoot .textcontrols a.multiquote:hover  {
	background: url(http://forums.trossenrobotics.com/images/buttons/multiquote_40b-hover.png) no-repeat  left;	
}
.postbitlegacy .postfoot .textcontrols a.promotecms, .postbit .postfoot .textcontrols a.promotecms  {
	background: url(images/cms/promote_small.png) no-repeat #CCCCCC left;
	padding: 0px 0px 0px 0px;
	padding-left: 20px;
	border: 0px solid #333333;
}
.postbitlegacy .postfoot .textcontrols a.promotecms:hover, .postbit .postfoot .textcontrols a.promotecms:hover  {
	background: url(images/cms/promote_small-hover.png) no-repeat  left;
	padding: 0px 0px 0px 0px;
	padding-left: 20px;
	border: 0px  ;
}
.postbitlegacy .postfoot .textcontrols a.infraction, .postbit .postfoot .textcontrols a.infraction  {
	background: url(http://forums.trossenrobotics.com/images/buttons/add-infraction_sm.png) no-repeat #CCCCCC left;
	padding: 0px 0px 0px 0px;
	padding-left: 20px;
	border: 0px solid #333333;
}
.postbitlegacy .postfoot .textcontrols a.infraction:hover, .postbit .postfoot .textcontrols a.infraction:hover  {
	background: url(http://forums.trossenrobotics.com/images/buttons/add-infraction_sm-hover.png) no-repeat  left;
	padding: 0px 0px 0px 0px;
	padding-left: 20px;
	border: 0px  ;
}
.postbitlegacy .postfoot .textcontrols a.report, .postbit .postfoot .textcontrols a.report  {
	background: url(http://forums.trossenrobotics.com/images/buttons/report-40b.png) no-repeat #CCCCCC left;
	padding: 0px 0px 0px 0px;
	padding-left: 20px;
	border: 0px solid #333333;
}
.postbitlegacy .postfoot .textcontrols a.report:hover, .postbit .postfoot .textcontrols a.report:hover  {
	background: url(http://forums.trossenrobotics.com/images/buttons/report-40b-hover.png) no-repeat  left;
	padding: 0px 0px 0px 0px;
	padding-left: 20px;
	border: 0px  ;
}
.postbitlegacy .postfoot .textcontrols a.blog, .postbit .postfoot .textcontrols a.blog  {
	background: url(http://forums.trossenrobotics.com/images/misc/blog/blogpost_40b.png) no-repeat #CCCCCC left;
	padding: 0px 0px 0px 0px;
	padding-left: 20px;
	border: 0px solid #333333;
}
.postbitlegacy .postfoot .textcontrols a.blog:hover, .postbit .postfoot .textcontrols a.blog:hover  {
	background: url(http://forums.trossenrobotics.com/images/misc/blog/blogpost_40b-hover.png) no-repeat  left ;
	padding: 0px 0px 0px 0px;
	padding-left: 20px;
	border: 0px  ;
}
.postbitlegacy .postfoot .textcontrols a.reputation, .postbit .postfoot .textcontrols a.reputation  {
	background: url(http://forums.trossenrobotics.com/images/buttons/reputation-40b.png) no-repeat #CCCCCC left;
	padding: 0px 0px 0px 0px;
	padding-left: 20px;
	border: 0px solid #333333;
}
.postbitlegacy .postfoot .textcontrols a.reputation:hover, .postbit .postfoot .textcontrols a.reputation:hover  {
	background: url(http://forums.trossenrobotics.com/images/buttons/reputation-40b-hover.png) no-repeat  left;
	padding: 0px 0px 0px 0px;
	padding-left: 20px;
	border: 0px  ;
}
.postbitlegacy .postfoot .textcontrols a.ip, .postbit .postfoot .textcontrols a.ip  {
	background: url(http://forums.trossenrobotics.com/images/buttons/ip-40b.png) no-repeat #CCCCCC left;
	padding: 0px 0px 0px 0px;
	padding-left: 20px;
	border: 0px solid #333333;
}
.postbitlegacy .postfoot .textcontrols a.ip:hover, .postbit .postfoot .textcontrols a.ip:hover  {
	background: url(http://forums.trossenrobotics.com/images/buttons/ip-40b-hover.png) no-repeat  left;
	padding: 0px 0px 0px 0px;
	padding-left: 20px;
	border: 0px  ;
}
.postbitlegacy .postfoot .textcontrols a.redcard, .postbit .postfoot .textcontrols a.redcard  {
	background: url(http://forums.trossenrobotics.com/images/buttons/red-card_sm.png) no-repeat #CCCCCC left;
	padding: 0px 0px 0px 0px;
	padding-left: 20px;
	border: 0px solid #333333;
}
.postbitlegacy .postfoot .textcontrols a.redcard:hover, .postbit .postfoot .textcontrols a.redcard:hover  {
	background: url(http://forums.trossenrobotics.com/images/buttons/red-card_sm-hover.png) no-repeat  left;
	padding: 0px 0px 0px 0px;
	padding-left: 20px;
	border: 0px  ;
}
.postbitlegacy .postfoot .textcontrols a.yellowcard, .postbit .postfoot .textcontrols a.yellowcard  {
	background: url(http://forums.trossenrobotics.com/images/buttons/yellow-card_sm.png) no-repeat #CCCCCC left;
	padding: 0px 0px 0px 0px;
	padding-left: 20px;
	border: 0px solid #333333;
}
.postbitlegacy .postfoot .textcontrols a.yellowcard:hover, .postbit .postfoot .textcontrols a.yellowcard:hover  {
	background: url(http://forums.trossenrobotics.com/images/buttons/yellow-card_sm-hover.png) no-repeat  left;
	padding: 0px 0px 0px 0px;
	padding-left: 20px;
	border: 0px  ;
}
.postbitlegacy .postfoot .textcontrols a.deleted, .postbit .postfoot .textcontrols a.deleted  {
	background: url(http://forums.trossenrobotics.com/images/buttons/deleted_sm.png) no-repeat #CCCCCC left;
	padding: 0px 0px 0px 0px;
	padding-left: 20px;
	border: 0px solid #333333;
}
.postbitlegacy .postfoot .textcontrols a.deleted:hover, .postbit .postfoot .textcontrols a.deleted:hover  {
	background: url(http://forums.trossenrobotics.com/images/buttons/deleted_sm-hover.png) no-repeat  left;
	padding: 0px 0px 0px 0px;
	padding-left: 20px;
	border: 0px  ;
}
.postbitlegacy .postfoot .textcontrols a:hover, .postbit .postfoot .textcontrols a:hover {
	color: #00B2ED;
	background: ;
	_background-image: none;
}

.postbitlegacy .postfoot .textcontrols a.highlight, .postbit .postfoot .textcontrols a.highlight {
	background-color: ;
}

.postbitlegacy .postfoot .textcontrols a img, .postbit .postfoot .textcontrols a img {
	position: absolute;
	top: 2px;
	left: 3px;
}

.postbitlegacy .postfoot .textcontrols a:hover img, .postbit .postfoot .textcontrols a:hover img {
	top: 2px;
}

.postbitlegacy .postfoot .textcontrols .mobile.mobile_android, .postbit .postfoot .textcontrols .mobile.mobile_android,
.postbitlegacy .postfoot .textcontrols .mobile.mobile_iphone, .postbit .postfoot .textcontrols .mobile.mobile_iphone,
.postbitlegacy .postfoot .textcontrols .mobile.mobile_facebook, .postbit .postfoot .textcontrols .mobile.mobile_facebook
 {
	background: url(http://forums.trossenrobotics.com/images/buttons/android_icon.png) no-repeat #CCCCCC left;
	padding: 0px 0px 0px 0px;
	padding-left: 20px;
	border: 0px solid #333333;
}

.postbitlegacy .postfoot .textcontrols a.mobile_android:hover, .postbit .postfoot .textcontrols a.mobile_android:hover  {
	background: url(http://forums.trossenrobotics.com/images/buttons/android_icon-hover.png) no-repeat  left;	
}

.postbitlegacy .postfoot .textcontrols .mobile.mobile_iphone, .postbit .postfoot .textcontrols .mobile.mobile_iphone  {
	background: url(http://forums.trossenrobotics.com/images/buttons/iphone_icon.png) no-repeat #CCCCCC left;
}

.postbitlegacy .postfoot .textcontrols a.mobile_iphone:hover, .postbit .postfoot .textcontrols a.mobile_iphone:hover  {
	background: url(http://forums.trossenrobotics.com/images/buttons/iphone_icon-hover.png) no-repeat  left;	
}

.postbitlegacy .postfoot .textcontrols .mobile.mobile_facebook, .postbit .postfoot .textcontrols .mobile.mobile_facebook  {
	background: url(http://forums.trossenrobotics.com/images/buttons/facebook_icon.png) no-repeat #CCCCCC left;
}

.postbitlegacy .postfoot .textcontrols a.mobile_facebook:hover, .postbit .postfoot .textcontrols a.mobile_facebook:hover  {
	background: url(http://forums.trossenrobotics.com/images/buttons/facebook_icon-hover.png) no-repeat  left;	
}

/*post bit deleted*/
.postbitdeleted, .postbitignored {
	margin-bottom: 10px;
	display:block;
	width: 100%;
	clear:both;
	position: relative;
	color: #000000;
	border: 1px solid #333333;
	float: left;
	background: #BBBBBB none   ;
	_background-image: none;
}

.postbitdeleted hr, .postbitignored hr {
	display: none;
}

.postbitdeleted .posthead, .postbitignored .posthead {
	display:table;
	background: #0E5C76 url(images/buttons/newbtn_middle.png) repeat-x  ;
	_background-image: none;
	border: 1px solid #333333;
	height: 16px;
	padding: 4px 0;
	color: #ffffff;
	width: 100%;
	margin: -1px -1px 0;
	font:   normal 12px Tahoma,Calibri,Verdana,Geneva,sans-serif;
}

.postbitdeleted .posthead .date, .postbitignored .posthead .date {
	display:inline-block;
	padding-left: 14px;
	margin-left: 10px;
	color: #ffffff;
	background:transparent url(http://forums.trossenrobotics.com/images/statusicon/post_old.png) no-repeat center left;
	font:   normal 12px Tahoma,Calibri,Verdana,Geneva,sans-serif;
}

.postbitdeleted .posthead .date .time, .postbitignored .date .time {
	color: #ffffff;
	font:   normal 12px Tahoma,Calibri,Verdana,Geneva,sans-serif;
}

.postbitdeleted .posthead .postimod, .postbitignored .posthead .postimod {
	position: absolute;
	right: 10px;
	top: 5px;
}

.postbitdeleted .postbody, .postbitignored .postbody {
	padding: 0;
}

.postbitdeleted .postrow, .postbitignored .postrow {
	padding:  10px;
}

.postbitdeleted .userinfo .memberaction, .postbitignored .userinfo .memberaction {
	display: block;
}


.postbitdeleted .userinfo, .postbitignored .userinfo {
	display:block;
	background: transparent;
	position: relative;
	clear: both;
	padding: 5px 10px;
	border-bottom: 1px solid #333333;
	word-wrap: break-word;
}

.postbitdeleted .userinfo .username, .postbitignored .userinfo .username {
	display:block;
	float: left;
	clear: right;
	font-size: 13px;
	/*font-weight:bold;*/
}

.postbitdeleted .userinfo .moreinfo, .postbitignored .userinfo .moreinfo {
	float: left;
	display:block;
	position: relative;
	top: -5px;
}

.postbitdeleted .userinfo .usertitle, .postbitignored .userinfo .usertitle {
	clear:both;
	display:block
	width: 100%;
}

.postbitdeleted .userinfo .popupmenu a.popupctrl:hover, .postbitignored .userinfo .popupmenu a.popupctrl:hover {
	color: #0E5C76;
	text-decoration: underline;
}

.postbitdeleted .title, .postbitignored .title {
	font:   bold 14px Tahoma,Calibri,Verdana,Geneva,sans-serif;
}

.postbitdeleted .nodecontrols, .postbitignored .nodecontrols {
	padding: 4px 0;
	padding-right: 10px;
	text-align: right;
	background: #D0D0D0 none   ;
	_background-image: none;
	font:   bold 11px Tahoma, Calibri, Verdana, Geneva, sans-serif;
	height: 16px;
}

.postbitdeleted .nodecontrols .textcontrol, .postbitignored .nodecontrols .textcontrol {
	background: #CCCCCC;
	_background-image: none;
	border: 0px solid #333333;
	font:   bold 11px Tahoma, Calibri, Verdana, Geneva, sans-serif;
}

.postbitdeleted .nodecontrols a.textcontrol:hover, .postbitignored .nodecontrols a.textcontrol:hover {
	background: ;
	_background-image: none;
	border: 0px solid #333333;
}

.userinfo .popupmenu:hover a.popupctrl {
	background-color:transparent;
}

.userinfo .popupgroup .popupmenu:hover a.popupctrl.active,
.userinfo .popupmenu a.popupctrl.active {
	background-color:transparent;
	color:inherit;
}
.postbit .userinfo .popupmenu .popupctrl {
	color:auto;
}

.postbit.imod_highlight .userinfo_noavatar,
.postbit.imod_highlight .userinfo,
.postbit.imod_highlight .postbody,
.postbitlegacy.imod_highlight .postdetails,
.postbitlegacy.imod_highlight .userinfo,
.postbitlegacy.imod_highlight .postbody,
.postbitdeleted.imod_highlight,
.postbitignored.imod_highlight {
	background:#CCCCCC;
	color: #000000;
}


/* start styles for postbit_legacy */
.userinfo .popupmenu:hover a.popupctrl {
	background-color:transparent;
}
.userinfo .popupgroup .popupmenu:hover a.popupctrl.active,
.userinfo .popupmenu a.popupctrl.active {
	background-color:transparent;
	color:inherit;
}
.postbitlegacy .userinfo .popupmenu .popupctrl {
	color:auto;
}
/* end styles for postbit_legacy */

img.onlinestatus_noavatar {
	position: relative;
	top: 5px;
	left: -56px;
}
img.onlinestatus {
	position: relative;
	top: 5px;
	left: -4px;
}

.postbody img.inlineimg {
	vertical-align: bottom;
}

.postbody .lastedited .reason {
	font-weight: bold;
}

.postbitlegacy .userinfo .userinfo_extra {
	width:180px;
	float: left;
	font-size: 11px;
}

.hasad {
	display:block;
	margin-right: 300px;
}
.postbit .posttitle, .postbitlegacy .title
{
	border-bottom: 1px solid #C8C8C8;
	padding-bottom: 5px;
	margin-bottom: 5px;
}

.texteditor textarea.cke_source {
	padding:0 1px 0 1px;
}

.texteditor.content .cke_skin_kama textarea.cke_source,
.texteditor textarea {
	color: #222222;
	font:    13px Tahoma,Calibri,Verdana,Geneva,sans-serif;
	white-space:pre-wrap;
	background: #FFFFFF none   ;
}

.texteditor.forum .cke_skin_kama textarea.cke_source,
.texteditor.forum textarea {
	color: #222222;
	font:    13px Verdana,Arial,Tahoma,Calibri,Geneva,sans-serif;
	white-space:pre-wrap;
	background: #FFFFFF none   ;
}


.editor_smiliebox {
	float:right;
	width:50px;
	height:200px;
	_background-color:#FFFFFF;
	_border:solid 1px #CCCCCC;
	padding:0 3px 3px 3px;
}

.editor_smiliebox .blocksubhead {
	padding:0;
	font-size:11px;
	font-weight:normal;
	text-align:center;
	border:solid 1px #CCCCCC;
	border-width:1px 0;
}

.editor_smiliebox ul.smiliebox {
	height:190px;
	overflow:hidden;
}

.editor_smiliebox ul.smiliebox li {
	float:left;
	height:20px;
	width:20px;
	margin:2px;
	overflow:hidden;
	position:relative;
	text-align:center;
}

.editor_smiliebox ul.smiliebox li div.table {
	display:table;
	height:100%;
	margin:auto;
	/* IE8 needs the following, see https://connect.microsoft.com/IE/feedback/ViewFeedback.aspx?FeedbackID=425785#tabs */
	table-layout:fixed;
	width:20px;
}

.editor_smiliebox ul.smiliebox li div.tablecell {
	display:table-cell;
	vertical-align:middle;
}

.editor_smiliebox ul.smiliebox li img {
	height:auto;
	max-width:20px;
	width:auto !important;
	cursor: pointer;
}

.editor_smiliebox div.moresmilies {
	text-align:center;
	font-size:11px;
}

.editor_textbox_container {
	width:100%;
	float:left;
	margin:0;
}

.editor_textbox_container.smilie {
	margin-right:-140px;
}

.editor_textbox_smilie {
	margin-right:60px;
}

/* dropdown button */
.cke_skin_kama_container {
	visibility:visible; 
	background: #FFFFFF; // no stylevar
}

.cke_skin_kama_container body {
	min-width: 0;
}

.attachment a {
	padding: 1px 0;
	border: 1px solid #ffffff;
	display: block;
}

.attachment a:hover {
	padding: 1px 0;
	border-color: #316ac5;
	background-color: #dff1ff;
}


.editorpopupbody {
	padding: 5px;
	min-width: 200px;
	max-height:250px;
	overflow-y:auto;
	overflow-x:hidden;
}


.editorpopupbody li.attachment {
	white-space:nowrap;
}

.editorpopupbody div.attach_insert_all {
	cursor: pointer;
	background-color:#FFFFFF;
	padding: 2px;
}

.cke_skin_kama .cke_panel.cke_attach {
	width:250px;
	height:auto;
}

.cke_skin_kama span.cke_browser_webkit,.cke_skin_kama span.cke_browser_gecko18 {
   outline: none !important;
}

/* attachment click */
.previewthumbactive {
	position: absolute;
	background: url('http://forums.trossenrobotics.com/images/misc/pencil.png') no-repeat top left;
	cursor: pointer;
	border:1px solid red;
	margin:0;
	z-index: 10;
}

img.previewthumb.active {
	cursor: pointer;
	border:1px solid red;
	margin:0;
}

/* ie8 width fix */
.cke_browser_ie8 .cke_editor {
	display: block !important;
}

/* disabled background override */
.cke_button .cke_disabled:hover {
	background-color: transparent !important;
}

/* icons */
.cke_skin_kama span:not(.cke_browser_ie) .cke_button .cke_icon {
	background: url('images/editor/sprite.png') no-repeat top left;
}

.cke_skin_kama .cke_browser_ie .cke_button .cke_icon {
	position: relative;
	overflow: hidden;
	width: 16px;
	height: 16px
}

.cke_skin_kama .cke_browser_ie .cke_button .cke_icon_image {
	position: absolute;
	width: 2498px;
	height: 60px;
	background: url('images/editor/sprite.png') no-repeat top left;
}

.cke_skin_kama .cke_browser_ie .cke_button .cke_icon_image.custom {
	background: none;
}

.cke_skin_kama .cke_browser_ie .cke_button a.cke_disabled .cke_icon {
	filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod='scale');
}

.cke_skin_kama .cke_browser_ie .cke_rtl .cke_button a.cke_disabled .cke_icon {
	filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod='scale');
}

.cke_skin_kama .cke_browser_ie .cke_button a.cke_on .cke_icon_image {
	top: 0px;
}

.cke_skin_kama .cke_browser_ie .cke_button a.cke_off .cke_icon_image {
	top: -20px;
}

.cke_skin_kama .cke_browser_ie .cke_button a.cke_disabled .cke_icon_image {
	top: -40px;
	filter: ;
}

/* VBIV-11809 */
.cke_skin_kama .cke_browser_ie .cke_button .cke_button_textcolor .cke_buttonarrow {
	filter: ;
}

.cke_skin_kama .cke_browser_ie .cke_button .cke_buttonarrow {
	position:relative;
	top:-4px;
}

.cke_skin_kama .cke_browser_ie .cke_rtl .cke_button a.cke_disabled .cke_icon_image {
	top: -40px;
	filter: ;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_openAttachmentWindow .cke_icon {
	background-position: 0 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_openAttachmentWindow .cke_icon_image {
	left: 0px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_enhancedsource .cke_icon
{
	background-position: -1597px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_enhancedsource .cke_icon_image
{
	left: -1597px;
}
.cke_skin_kama .cke_button_enhancedsource .cke_label
{
	/* This displays the "source" text next to the source button!*/
	/*display: inline !important;*/
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_pastetext .cke_icon
{
	background-position: -2480px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_pastetext .cke_icon_image
{
	left: -2480px;
}
.cke_skin_kama span:not(.cke_browser_ie) .cke_button_pastefromword .cke_icon
{
	background-position: -2430px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_pastefromword .cke_icon_image
{
	left: -2430px;
}
.cke_skin_kama span:not(.cke_browser_ie) .cke_button_removeFormat .cke_icon
{
	background-position: -1447px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_removeFormat .cke_icon_image
{
	left: -1447px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_bold .cke_icon
{
	background-position: -50px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_bold .cke_icon_image
{
	left: -50px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_italic .cke_icon
{
	background-position: -897px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_italic .cke_icon_image
{
	left: -897px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_underline .cke_icon
{
	background-position: -2247px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_underline .cke_icon_image
{
	left: -2247px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_subscript .cke_icon
{
	background-position: -2147px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_subscript .cke_icon_image
{
	left: -2147px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_superscript .cke_icon
{
	background-position: -2197px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_superscript .cke_icon_image
{
	left: -2197px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_table .cke_icon
{
	background-position: -2047px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_table .cke_icon_image
{
	left: -2047px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_vbTableProperties .cke_icon
{
	background-position: -1797px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_vbTableProperties .cke_icon_image
{
	left: -1797px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_tableDelete .cke_icon
{
	background-position: -1847px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_tableDelete .cke_icon_image
{
	left: -1847px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_vbRowInsertBefore .cke_icon
{
	background-position: -1997px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_vbRowInsertBefore .cke_icon_image
{
	left: -1997px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_vbRowInsertAfter .cke_icon
{
	background-position: -1947px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_vbRowInsertAfter .cke_icon_image
{
	left: -1947px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_vbRowDelete .cke_icon
{
	background-position: -1897px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_vbRowDelete .cke_icon_image
{
	left: -1897px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_vbColumnInsertBefore .cke_icon
{
	background-position: -1747px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_vbColumnInsertBefore .cke_icon_image
{
	left: -1747px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_vbColumnInsertAfter .cke_icon
{
	background-position: -1697px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_vbColumnInsertAfter .cke_icon_image
{
	left: -1697px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_vbColumnDelete .cke_icon
{
	background-position: -1647px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_vbColumnDelete .cke_icon_image
{
	left: -1647px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_horizontalrule .cke_icon
{
	background-position: -2097px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_horizontalrule .cke_icon_image
{
	left: -2097px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_smiley .cke_icon
{
	background-position: -1497px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_smiley .cke_icon_image
{
	left: -1497px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_iespell .cke_icon
{
	background-position: -1547px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_iespell .cke_icon_image
{
	left: -1547px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_link .cke_icon
{
	background-position: -300px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_link .cke_icon_image
{
	left: -300px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_Email .cke_icon
{
	background-position: -401px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_Email .cke_icon_image
{
	left: -401px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_unlink .cke_icon
{
	background-position: -2346px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_unlink .cke_icon_image
{
	left: -2346px;
}
.cke_skin_kama span:not(.cke_browser_ie) .cke_button_image .cke_icon, .cke_skin_kama span:not(.cke_browser_ie) .cke_button_vbimage .cke_icon
{
	background-position: -747px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_image .cke_icon_image, .cke_skin_kama .cke_browser_ie .cke_button_vbimage .cke_icon_image
{
	left: -747px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_videotag .cke_icon
{
	background-position: -2397px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_videotag .cke_icon_image
{
	left: -2397px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_Quote .cke_icon
{
	background-position: -1347px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_Quote .cke_icon_image
{
	left: -1347px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_Code .cke_icon
{
	background-position: -151px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_Code .cke_icon_image
{
	left: -151px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_Html .cke_icon
{
	background-position: -451px 0; 
}
.cke_skin_kama .cke_browser_ie .cke_button_Html .cke_icon_image
{
	left: -451px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_Php .cke_icon
{
	background-position: -1297px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_Php .cke_icon_image
{
	left: -1297px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_PageBreak .cke_icon
{
	background-position: -1147px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_PageBreak .cke_icon_image
{
	left: -1147px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_PreviewBreak .cke_icon
{
	background-position: -100px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_PreviewBreak .cke_icon_image
{
	left: -100px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_textcolor .cke_icon
{
	background-position: -201px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_textcolor .cke_icon_image
{
	left: -201px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_undo .cke_icon
{
	background-position: -2297px 0; 
}
.cke_skin_kama .cke_browser_ie .cke_button_undo .cke_icon_image
{
	left: -2297px;
}

.cke_skin_kama .cke_rtl span:not(.cke_browser_ie) .cke_button_undo .cke_icon
{
	background-position: -1397px 0;
}
.cke_skin_kama .cke_rtl .cke_browser_ie .cke_button_undo .cke_icon_image
{
	left: -1397px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_redo .cke_icon
{
	background-position: -1397px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_redo .cke_icon_image
{
	left: -1397px;
}

.cke_skin_kama .cke_rtl span:not(.cke_browser_ie) .cke_button_redo .cke_icon
{
	background-position: -2297px 0; 
}
.cke_skin_kama .cke_rtl .cke_browser_ie .cke_button_redo .cke_icon_image
{
	left: -2297px;
}

.cke_skin_kama .cke_rtl .cke_rcombo {
	float:right;
}

.cke_skin_kama .cke_browser_ie6 .cke_rtl .cke_rcombo,
.cke_skin_kama .cke_browser_ie7 .cke_rtl .cke_rcombo  {
	float:none;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_numberedlist .cke_icon
{
	background-position: -797px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_numberedlist .cke_icon_image
{
	left: -797px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_bulletedlist .cke_icon
{
	background-position: -847px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_bulletedlist .cke_icon_image
{
	left: -847px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_outdent .cke_icon
{
	background-position: -1097px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_outdent .cke_icon_image
{
	left: -1097px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_indent .cke_icon
{
	background-position: -697px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_indent .cke_icon_image
{
	left: -697px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_justifyleft .cke_icon
{
	background-position: -997px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_justifyleft .cke_icon_image
{
	left: -997px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_justifycenter .cke_icon
{
	background-position: -947px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_justifycenter .cke_icon_image
{
	left: -947px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_justifyright .cke_icon
{
	background-position: -1047px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_justifyright .cke_icon_image
{
	left: -1047px;
}

/* rtl icons */

.cke_skin_kama .cke_rtl span:not(.cke_browser_ie) .cke_button_undo .cke_icon
{
	background-position: -1397px 0;
}
.cke_skin_kama .cke_browser_ie .cke_rtl .cke_button_undo .cke_icon_image
{
	left: -1397px;
}

.cke_skin_kama .cke_rtl span:not(.cke_browser_ie) .cke_button_redo .cke_icon
{
	background-position: -2297px 0; 
}
.cke_skin_kama .cke_browser_ie .cke_rtl .cke_button_redo .cke_icon_image
{
	left: -2297px;
}

.cke_skin_kama .cke_rtl span:not(.cke_browser_ie) .cke_button_outdent .cke_icon
{
		background-position: -697px 0;
}
.cke_skin_kama .cke_browser_ie .cke_rtl .cke_button_outdent .cke_icon_image
{
		left: -697px;
}

.cke_skin_kama .cke_rtl span:not(.cke_browser_ie) .cke_button_indent .cke_icon
{
		background-position: -1097px 0;
}
.cke_skin_kama .cke_browser_ie .cke_rtl .cke_button_indent .cke_icon_image
{
		left: -1097px;
}

.cke_skin_kama .cke_rtl span:not(.cke_browser_ie) .cke_button_columnInsertBefore .cke_icon
{
	background-position: -1697px 0;
}
.cke_skin_kama .cke_browser_ie .cke_rtl .cke_button_columnInsertBefore .cke_icon_image
{
	left: -1697px;
}

.cke_skin_kama .cke_rtl span:not(.cke_browser_ie) .cke_button_columnInsertAfter .cke_icon
{
	background-position: -1747px 0;
}
.cke_skin_kama .cke_browser_ie .cke_rtl .cke_button_columnInsertAfter .cke_icon_image
{
	left: -1747px;
}

.cke_skin_kama .cke_dialog .cke_dialog_ui_labeled_label {
	float:none;
}

.cke_skin_kama .cke_dialog input[type="file"] {
	border:1px inset;
}

.cke_skin_kama div.cke_bottom_restore_autosave {
	position:relative;
}

.cke_skin_kama div.cke_bottom_restore_autosave .cke_toolgroup {
	height:18px;
	position:absolute;
	top:4px;
	padding:0 3px 0 0;
}

.cke_skin_kama div.cke_bottom_restore_autosave a.restoretext {
	cursor:pointer;
	height:12px;
	background-image:none
}

.cke_skin_kama div.as_ind_container {
	position:relative;
}

.cke_skin_kama div.as_ind_container div {
	background-color:rgb(255, 255, 0);
	right:0;
	position:absolute;
	padding:2px;
	top:-12px;
	font-weight:bold;
}

.cke_skin_kama .cke_toolbox {
	margin-bottom: 5px;
}

/* VBIV-11874 Override CSS so that textarea popup resizes with the dialog */
.cke_skin_kama .cke_dialog .cke_dialog_ui_textarea.cke_pastetext {
	width:auto;
	height:auto;
}

/* Turn off focus outline on mac */
.cke_dialog_tab:focus {
	outline:none;
}

/* Allow size combo to adjust a bit horizontally */
.cke_skin_kama .cke_fontSize span.cke_text {
	max-width:60px;
	min-width:25px;
	width:auto;
	_width:25px;
}


.cke_skin_kama .cke_editor .cke_rcombo a,
.cke_skin_kama .cke_editor .cke_toolgroup {
	background:  url(clientscript/ckeditor/skins/kama/images/sprites.png) repeat-x 0px -500px;
}

.cke_skin_kama .cke_editor .cke_rcombo a:hover,
.cke_skin_kama .cke_editor .cke_rcombo a:focus,
.cke_skin_kama .cke_editor .cke_rcombo a:active,
.cke_skin_kama .cke_editor .cke_button a:hover,
.cke_skin_kama .cke_editor .cke_button a:focus,
.cke_skin_kama .cke_editor .cke_button a:active {
	background-color: #DFF1FF;
}


.cke_skin_kama .cke_editor .cke_button a.cke_on {
	background-color: #A3D7FF;
}

.cke_skin_kama .cke_editor .cke_button a.cke_on:hover,
.cke_skin_kama .cke_editor .cke_button a.cke_on:focus,
.cke_skin_kama .cke_editor .cke_button a.cke_on:active {
	background-color: #86CAFF;
}

.cke_skin_kama .cke_editor .cke_button a.cke_disabled * {
	opacity: .3;
}

.cke_skin_kama .cke_editor .cke_button a,
.cke_skin_kama .cke_editor .cke_button a.cke_off {
	opacity: .7;
}

.cke_skin_kama .cke_wrapper.cke_ltr,
.cke_skin_kama .cke_wrapper.cke_rtl {
	background: #D3D3D3 url(clientscript/ckeditor/skins/kama/images/sprites.png) repeat-x 0px -1950px;
}

.cke_skin_kama .cke_dialog_body .cke_dialog_contents {
	background: #FFFFFF none   ;
}

.cke_skin_kama .cke_dialog_contents .cke_dialog_contents {
	background-color: #E4E4E4;
	border-top: #FFFFFF 1px solid;
	border-right: #FFFFFF 1px solid;
	border-left: #FFFFFF 1px solid;
}

.cke_skin_kama .cke_dialog_title {
	color: #000000;
}

.cke_skin_kama .cke_dialog_body .cke_dialog_tabs a.cke_dialog_tab {
	background-color: #FFFFFF;
	color: #000000;	
}

.cke_skin_kama .cke_dialog_body .cke_dialog_tabs a.cke_dialog_tab_selected {
	background-color: #E4E4E4;
	color: #000000;	
}

.cke_skin_kama .cke_dialog_body .cke_dialog_tabs a.cke_dialog_tab:hover {
	background-color: #E1E1E1;
	color: #000000;
}

.cke_skin_kama .cke_dialog_contents .cke_dialog_footer {
	background-color: #E4E4E4;
	border-top: #FFFFFF 1px solid;
	border-right: #FFFFFF 1px solid;
	border-left: #FFFFFF 1px solid;
}

.cke_skin_kama .cke_dialog .cke_dialog_body {
	background: #FFFFFF none   ;
}

.cke_skin_kama .cke_dialog_body .cke_dialog_title {
	border-bottom: #E4E4E4 1px solid;
}

.cke_skin_kama .cke_dialog_contents *, .cke_skin_kama .cke_dialog_contents a:hover, .cke_skin_kama .cke_dialog_contents a:link, .cke_skin_kama .cke_dialog_contents a:visited, .cke_skin_kama .cke_dialog_contents a:active {
	color: #000000;
}

.cke_skin_kama .cke_dialog .cke_dialog_body a.cke_dialog_close_button {
	background-image:none;
	top:10px;
}

.cke_skin_kama .cke_dialog_body .cke_dialog_close_button span {
	display:inline;
	font-weight:bold;
	font-size:10px;
	padding:0 2px 0 2px;
	border:1px solid #000000;
	color: #000000;
	cursor:pointer;
	display: inline-block; 
	vertical-align: bottom;
}

.cke_skin_kama .cke_dialog_body .cke_dialog_close_button span:hover {
	background-color:#E4E4E4;
	color: #FFFFFF;
}

.cke_skin_kama .cke_dialog .cke_dialog_body .cke_dark_background {
	background-color: #E4E4E4;
}

.cke_skin_kama .cke_dialog_body a.cke_smile img,
.cke_skin_kama .cke_dialog_body a.cke_smile:focus img,
.cke_skin_kama .cke_dialog_body a.cke_smile:active img,
.cke_skin_kama .cke_dialog_body a.cke_smile:hover img {
	border:0;
	padding:2px;
}

.cke_skin_kama .cke_dialog .cke_dialog_body .cke_dialog_ui_input_text,
.cke_skin_kama .cke_dialog .cke_dialog_body .cke_dialog_ui_input_select,
.cke_skin_kama .cke_dialog .cke_dialog_body .cke_dialog_ui_input_textarea {
	color:#000000;
}

.cke_skin_kama .cke_dialog div.cke_disabled .cke_dialog_ui_labeled_content * {
	background-color:#CCCCCC;
}

.cke_skin_kama .cke_dialog .smiley_page {
	overflow:auto;
}

.cke_skin_kama .cke_dialog .smiley_category {
	padding:5px;
}


/* CSS Document */

.bbcode_container {
	margin:20px;
	margin-top:5px;
	display:block;
}

.bbcode_container .bbcode_desc {
	margin-bottom:2px;
	font-size:11px;
}
/*text-align should alwais be LTR for the CODE blocks*/
.bbcode_container div.bbcode_code,
.bbcode_container pre.bbcode_code {
	margin:0;
	padding:6px;
	border:1px inset;
	text-align:left;
	overflow:scroll;
	direction:ltr;
	background:#D0D0D0 none   ;
	font-size:12px;	
}

.bbcode_container code.bbcode_code {
	margin:0;
	text-align:left;
	direction:ltr;
	font-size:12px;	
}

.bbcode_container code.bbcode_code code {
	white-space:nowrap;
}

.bbcode_container div.bbcode_quote {
	margin:0 10px;
	margin-bottom: 10px;
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	background: #BBBBBB none   ;
	border-radius: 5px;
	border: 1px solid #333333;
	font: italic  normal 13px Tahoma,Calibri,Verdana,Geneva,sans-serif;
	position: relative;
	top: 0;
}

.bbcode_container .bbcode_quote_container {
	background: transparent url(http://forums.trossenrobotics.com/images/misc/quote-left.png) no-repeat  left;
	display:block;
	width: 9px;
	height: 13px;
	position: absolute;
	top: 5;
	left: -9px;
}

.bbcode_quote div.quote_container {
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	border-radius: 5px;
	padding: 5px 10px 5px 10px;
}

.bbcode_quote .bbcode_postedby img {
	position: relative;
	top: 1px;
}

.bbcode_container div.bbcode_quote.printable {
	background:none;
	border:none;
}

.bbcode_container div.bbcode_quote div.message {
	/*font-style:italic;*/
	padding:8px 0px;
}

/* fix the bug where li's in quotes are floated */
.bbcode_container div.bbcode_quote div.message ol>li, .bbcode_container div.bbcode_quote div.message ul>li{
	float: none;
}

/* from components.css */
.bbcode_postedby {
	font:   normal 12px Tahoma,Calibri,Verdana,Geneva,sans-serif;
}

.bbcode_postedby img {
	margin:0;
}