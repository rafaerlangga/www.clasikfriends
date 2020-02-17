<html>
<title>Hacked By ./Mr.J4K</title>
<style type="text/css">body {
 
background: #000000;
 
font-family: Courier New;
 
color: #ff0000;
 
text-align: center;
 
}
 
a {
 
text-decoration:none;
 
color:
 
#ff0000;
 
}
 
</style>
 
<script type="text/javascript">/*<![CDATA[*/
 
TypingText = function(element, interval, cursor, finishedCallback) {
 
if((typeof document.getElementById ==
 
"undefined") || (typeof element.innerHTML == "undefined")) {
 
this.running = true;
 
return;
 
}
 
this.element = element;
 
this.finishedCallback = (finishedCallback
 
? finishedCallback : function() { return; });
 
this.interval = (typeof interval == "undefined" ? 100 : interval);
 
this.origText = this.element.innerHTML;
 
this.unparsedOrigText = this.origText;
 
this.cursor = (cursor ? cursor : "");
 
this.currentText = "";
 
this.currentChar = 0;
 
this.element.typingText = this;
 
if(this.element.id == "") this.element.id = "typingtext" + TypingText.currentIndex++;
 
TypingText.all.push(this);
 
this.running = false;
 
this.inTag = false;
 
this.tagBuffer = "";
 
this.inHTMLEntity = false;
 
this.HTMLEntityBuffer = "";
 
}
 
TypingText.all = new Array();
 
TypingText.currentIndex = 0;
 
TypingText.runAll
 
= function() {
 
for(var i = 0; i < TypingText.all.length; i++) TypingText.all[i].run();
 
}
 
TypingText.prototype.run = function() {
 
if(this.running) return;
 
if(typeof this.origText == "undefined") {
 
setTimeout("document.getElementById('" + this.element.id + "').typingText.run()", this.interval);
 
return;
 
}
 
if(this.currentText == "") this.element.innerHTML = "";
 
if(this.currentChar < this.origText.length) {
 
if(this.origText.charAt(this.currentChar) == "<" &&
 
!this.inTag) {
 
this.tagBuffer = "<";
 
this.inTag = true;
 
this.currentChar++;
 
this.run();
 
return;
 
} else if(this.origText.charAt(this.currentChar) == ">" &&
 
this.inTag) {
 
this.tagBuffer += ">";
 
this.inTag = false;
 
this.currentText += this.tagBuffer;
 
this.currentChar++;
 
this.run();
 
return;
 
} else
 
if(this.inTag) {
 
this.tagBuffer += this.origText.charAt(this.currentChar);
 
this.currentChar++;
 
this.run();
 
return;
 
} else
 
if(this.origText.charAt(this.currentChar) == "&" && !this.inHTMLEntity) {
 
this.HTMLEntityBuffer = "&";
 
this.inHTMLEntity = true;
 
this.currentChar++;
 
this.run();
 
return;
 
} else if(this.origText.charAt(this.currentChar) == ";" && this.inHTMLEntity) {
 
this.HTMLEntityBuffer += ";";
 
this.inHTMLEntity =
 
false;
 
this.currentText += this.HTMLEntityBuffer;
 
this.currentChar++;
 
this.run();
 
return;
 
} else if(this.inHTMLEntity) {
 
this.HTMLEntityBuffer +=
 
this.origText.charAt(this.currentChar);
 
this.currentChar++;
 
this.run();
 
return;
 
} else {
 
this.currentText += this.origText.charAt(this.currentChar);
 
}
 
this.element.innerHTML = this.currentText;
 
this.element.innerHTML += (this.currentChar < this.origText.length - 1 ? (typeof this.cursor == "function" ?
 
this.cursor(this.currentText) : this.cursor) : "");
 
this.currentChar++;
 
setTimeout("document.getElementById('" + this.element.id + "').typingText.run()",
 
this.interval);
 
} else {
 
this.currentText = "";
 
this.currentChar = 0;
 
this.running = false;
 
this.finishedCallback();
 
}
 
}
 
 
/*]]>*/</script>
<center>
<img src="https://media.tenor.com/images/08c2fe57ad38a3176590b75dde536dda/tenor.gif" border="0"width="350">
 
<p id="message"><b> {+} Website Has Been Hacked By ==> MR.J4K {+} </b><br>
===========================================
<span style="color: green;">
<b><br>excuse me....</b></font><span style="color: aqua;"">
<br />
<br> <b><br>In the real world, we are nobody. Stranger, Loser, Strange person.
But in cyberspace, we feel considered>_<
<br> </b>
</font>
<audio src="https://h.top4top.io/m_1487ybjs30.mp3" autoplay></audio>
<br>
<span style="color: Red;">
<br><b>don't disturb my friend !!</b><br></font>
<font color=green</h2>MrX@gmail.com</font>
</center>
<div style="text-shadow: 0px 0px 5px red;">
<span style="color: white;">
<center><font size='4' color='Black'>  </font>
 
<font size='4' color='green'>REX CYBER TEAM<font size='4' color='green'>  </font>
 
<br>
 
<marquee width="45%" behavior="alternate" scrollamount="5" style="width: 45%;">
 
<font size="4" color="lime">
 
Tn.Revenge -./Darah:) - ObͥeͣsͫKil⃢Lerシ - Culametan - X-Revan AR - IComeBack - Qñ.Źùŕà - ./Unknown
[Mr.Zer0ne|4TI -./CopRObOT - Ｊ-ＳＭ１ＴＨ - And You!! ] 

<script type="text/javascript">/*<![CDATA[*/
 
new TypingText(document.getElementById("message"), 90, function(i){ var ar = new Array("_", " ", "_", " "); return " " +
 
ar[i.length % ar.length]; });
 
 
//Type out examples:
 
TypingText.runAll();
 
/*]]>*/</script>
<iframe width="0" height="0" src="https://h.top4top.io/m_1487ybjs30.mp3" frameborder="0" allowfullscreen></iframe>
</body>
</html>
