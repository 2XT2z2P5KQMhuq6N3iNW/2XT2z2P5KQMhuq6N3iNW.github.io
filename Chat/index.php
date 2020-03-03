<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    
    <title>Chat</title>
    
    <link rel="stylesheet" href="style.css" type="text/css" />
          <script type="text/javascript">
          (function(t){"function"==typeof define&&define.amd?define("primish/primish",t):"undefined"!=typeof module&&module.exports?module.exports=t():this.primish=t()}).call(this,function(){var t=Object.hasOwnProperty,e=function(e,n){return t.call(e,n)},n=function(t,e,n){for(var i in t)if(e.call(n,t[i],i,t)===!1)break;return t};if(!{valueOf:0}.propertyIsEnumerable("valueOf")){var i=Object.prototype,r="constructor,toString,valueOf,hasOwnProperty,isPrototypeOf,propertyIsEnumerable,toLocaleString".split(",");n=function(t,n,o){var u,s,f;for(u in t)if(n.call(o,t[u],u,t)===!1)return t;for(s=0;(u=r[s])&&(f=t[u],f===i[u]&&!e(t,u)||n.call(o,f,u,t)!==!1);s++);return t}}var o=Object.create||function(t){var e=function(){};return e.prototype=t,new e},u=function(t,e){e=~~e;for(var n=-1,i=t.length-e,r=Array(i);++n<i;)r[n]=t[n+e];return r},s=function(){var t=Object.prototype.toString,e="[object Object]";return function(n){return t.call(n)===e&&null!=n}}(),f=Object.getOwnPropertyDescriptor,l=Object.defineProperty;try{l({},"~",{}),f({},"~")}catch(p){f=function(t,e){return{value:t[e]}},l=function(t,e,n){return t[e]=n.value,t}}var c=/^constructor|extend|define$/,a=function(t){if(e(t,"implement")){"function"==typeof t.implement&&(t.implement=[t.implement]);for(var i=0,r=t.implement.length;r>i;++i)this.implement(new t.implement[i]);delete t.implement}return n(t,function(e,n){n.match(c)||(s(e)&&(t[n]=m(e)),this.define(n,f(t,n)||{writable:!0,enumerable:!0,configurable:!0,value:e}))},this),this},h=function(t){var n,i=this._parent||this.constructor.parent;if(this._parent=i.constructor.parent,!t||!e(i,t))throw new Error("You need to pass a valid super method to .parent","");return n=i[t].apply(this,u(arguments,1)),this._parent=i,n},m=function(e){var n,i=o(e);for(n in e)t.call(e,n)&&(i[n]=e[n]);return i},d=function y(e,n){var i,r=function(t){e[t]=s(n[t])?s(e[t])?y(e[t],m(n[t])):m(n[t]):n[t]};if(null==e||null==n)return e;for(i in n)t.call(n,i)&&r(i);return e},v=function(t,n){"object"==typeof t&&(n=t,t=void 0);var i=n.extend,r=e(n,"constructor")?n.constructor:i?function(){return i.apply(this,arguments)}:function(){};if(delete n.constructor,s(n.options)&&(n.options=m(n.options)),i){var u=i.prototype,f=r.prototype=o(u);r.parent=u,f.constructor=r,s(n.options)&&s(u.options)&&(n.options=d(m(u.options),n.options)),delete n.extend}return n.parent=h,r.define=n.define||i&&i.define||function(t,e){return l(this.prototype,t,e),this},r.implement=a,t&&r.define("_id",{value:t,enumerable:!1}),r.implement(n)};return v.has=e,v.each=n,v.merge=d,v.clone=m,v.slice=u,v.create=o,v.define=l,v.hide=function(t,e,n){return t[e]=t[e]||n,l(t,e,{enumerable:!1,value:t[e]}),t[e]},v}),function(t){"function"==typeof define&&define.amd?define("primish/options",["./primish"],t):"undefined"!=typeof module&&module.exports?module.exports=t(require("./primish")):this.options=t(this.primish)}.call(this,function(t){var e="function",n=function(t){return t.replace(/^on([A-Z])/,function(t,e){return e.toLowerCase()})};return t({setOptions:function(i){var r,o;if(this.options||(this.options={}),o=this.options=t.merge(t.clone(this.options),i),this.on&&this.off)for(r in o)if(o.hasOwnProperty(r)){if(typeof o[r]!==e||!/^on[A-Z]/.test(r))continue;this.on(n(r),o[r]),delete o[r]}return this}})}),function(t){"function"==typeof define&&define.amd?define("primish/emitter",["./primish"],t):"undefined"!=typeof module&&module.exports?module.exports=t(require("./primish")):this.emitter=t(this.primish)}.call(this,function(t){var e=t.slice,n=0,i={once:function(t,e){var n=this,i=function(){e.apply(this,arguments),n.off(t,i)};return i}},r=t({on:function(e,r){e=e.split(/\s+/);var o,u,s,f,l,p=0,c=e.length,a=this._listeners||t.hide(this,"_listeners",{});t:for(;c>p;++p){s=e[p].split(":"),f=s.shift(),l=s.length&&s[0]in i,l||(f=e[p]),o=a[f]||(a[f]={});for(u in o)if(o[u]===r)continue t;o[(n++).toString(36)]=l?i[s[0]].call(this,f,r):r}return this},off:function(t,e){var n,i,r,o,u=this._listeners,s=0;if(u&&(n=u[t])){for(o in n)if(s++,null==i&&n[o]===e&&(i=o),i&&s>1)break;if(i&&(delete n[i],1===s)){delete u[t];for(r in u)return this;delete this._listeners}}return this},trigger:function(t){var n,i,r=this._listeners;if(r&&r[t])if(arguments.length>1){i=e(arguments,1);for(n in r[t])r[t][n].apply(this,i)}else for(n in r[t])r[t][n].call(this);return this}});return r.definePseudo=function(t,e){i[t]=e},r});
          </script>

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script type="text/javascript">
    /* 
Created by: Kenrick Beckett

Name: Chat Engine
*/

var instanse = false;
var state;
var mes;
var file;

function Chat () {
    this.update = updateChat;
    this.send = sendChat;
	this.getState = getStateOfChat;
}

//gets the state of the chat
function getStateOfChat(){
	if(!instanse){
		 instanse = true;
		 $.ajax({
			   type: "POST",
			   url: "process.php",
			   data: {  
			   			'function': 'getState',
						'file': file
						},
			   dataType: "json",
			
			   success: function(data){
				   state = data.state;
				   instanse = false;
			   },
			});
	}	 
}

//Updates the chat
function updateChat(){
	 if(!instanse){
		 instanse = true;
	     $.ajax({
			   type: "POST",
			   url: "process.php",
			   data: {  
			   			'function': 'update',
						'state': state,
						'file': file
						},
			   dataType: "json",
			   success: function(data){
				   if(data.text){
						for (var i = 0; i < data.text.length; i++) {
                            $('#chat-area').append($("<p>"+ data.text[i] +"</p>"));
                        }								  
				   }
				   document.getElementById('chat-area').scrollTop = document.getElementById('chat-area').scrollHeight;
				   instanse = false;
				   state = data.state;
			   },
			});
	 }
	 else {
		 setTimeout(updateChat, 1500);
	 }
}

//send the message
function sendChat(message, nickname)
{       
    updateChat();
     $.ajax({
		   type: "POST",
		   url: "process.php",
		   data: {  
		   			'function': 'send',
					'message': message,
					'nickname': nickname,
					'file': file
				 },
		   dataType: "json",
		   success: function(data){
			   updateChat();
		   },
		});
}

    </script>
    <script type="text/javascript">

        // ask user for name with popup prompt    
//      var name = prompt("Enter your chat name:", "Guest"); 
              
// idea + dictionary by hnldesign from b3ta
var Insulter = primish({
    a:  'artist formally known as,badly drawn,bastardized,bloody,blooming,bottled,ass-banging,cock wielding,cocking,cockmunching,complete,constipated,cross-eyed,cunting,dementing,demonizing,dipping,dripping,eye-less,failed,friend of a,fritzl-admiring,fucking,glistering,glorious,go suck a,hard-rubbing,hitler\'s personal,holy,inbred,indeterminable,irredeemable,irrelevant,lonely,maiming,mental,mong loving,naked,overrated,prodigal,pulsating,racist,rectal,retarded,rotating,senile,shitting,slutty,sodding,son of a,spastic,spunking,stale,stillborn,strangely shaped,throbbing,titless,twin-headed,unborn,unhuman,virgin,wanking,whoring'.split(','),
    b: 'anus,arse,ass,bunghole,butt,clusterfuck,cock,cockstorm,colon,cum,cunt,dick,fuck,fuckwit,gaylord,ginger,gloryhole,jizz,llama,nut,nutsack,piss,retard,scrotum,semen,shaft,shit,spazz,sperm,sphincter,spunk,tit,wank'.split(','), 
    c: 'alien,asswipe,balls,biscuit,bollock,bottom,boy,bucket,cockroach,dog,erection,excrement,faggot,flap,foot,girl,goatse,head,hole,infidel,king,knob,lord,MILF,pig,rag,sack,sod,stack,stain,testicle,tranny,twat,worm'.split(','),
    d: 'amputee,bastard,dictator,experiment,extractor,fucker,graduate,handler,licker,lover,packer,plonker,professor,raper,voyeur'.split(','),
    
    combos: ['a,b,c', 'a,b,d', 'b,c', 'b,d'],

    constructor: function(element){
        element && (this.element = element);
        this.combos = this.combos.map(function(c){return c.split(',')});
        if ('SpeechSynthesisUtterance' in window){
            this.msg = new SpeechSynthesisUtterance();
            this.voices = window.speechSynthesis.getVoices();
            this.msg.voice = this.voices[10]; 
            // Note: some voices don't support altering params
            this.msg.voiceURI = 'native';
            this.msg.volume = 1; // 0 to 1
            this.msg.rate = 1; // 0.1 to 10
            this.msg.pitch = 2; //0 to 2
            this.msg.lang = 'en-GB';                    
        }
        this.insult();
window.name = this.insult();
    },
    

    
    insult: function(e){
        e && e.preventDefault();
        var insult = this.get();
        
        this.element && (this.element.innerHTML = insult);
        
        return insult;
    },
    
    get: function(){
        var c = this.combos, 
            self = this;
        
        return c[Math.random()*c.length>>0].map(function(k){
            return self[k][Math.random()*self[k].length>>0]
        }).join(' ');    
    }        
});


    var insulter = new Insulter(document.getElementById('insult'));


        // default name is 'Guest'
    	if (!name || name === ' ') {
    	   name = "Guest";	
    	}
    	
    	// strip tags
    	name = name.replace(/(<([^>]+)>)/ig,"");
    	
    	// display name on page
    	$("#name-area").html("You are: <span>" + name + "</span>");
    	
    	// kick off chat
        var chat =  new Chat();
    	$(function() {
    	
    		 chat.getState(); 
    		 
    		 // watch textarea for key presses
             $("#sendie").keydown(function(event) {  
             
                 var key = event.which;  
           
                 //all keys including return.  
                 if (key >= 33) {
                   
                     var maxLength = $(this).attr("maxlength");  
                     var length = this.value.length;  
                     
                     // don't allow new content if length is maxed out
                     if (length >= maxLength) {  
                         event.preventDefault();  
                     }  
                  }  
    		 																																																});
    		 // watch textarea for release of key press
    		 $('#sendie').keyup(function(e) {	
    		 					 
    			  if (e.keyCode == 13) { 
    			  
                    var text = $(this).val();
    				var maxLength = $(this).attr("maxlength");  
                    var length = text.length; 
                     
                    // send 
                    if (length <= maxLength + 1) { 
                     
    			        chat.send(text, name);	
    			        $(this).val("");
    			        
                    } else {
                    
    					$(this).val(text.substring(0, maxLength));
    					
    				}	
    				
    				
    			  }
             });
            
    	});

    </script>

</head>

<body onload="setInterval('chat.update()', 1000)">

    <div id="page-wrap">
    
        <h2>Evil Chat</h2>
        
        <p id="name-area"></p>
        
        <div id="chat-wrap"><div id="chat-area"></div></div>
        
        <form id="send-message-area">
            <p>Your message: </p>
            <textarea id="sendie" maxlength = '100' autofocus></textarea>
        </form>

    </div>

</body>

</html>