/* Source and licensing information for the line(s) below can be found at http://18.223.20.109/core/assets/vendor/jquery/jquery-extend-3.4.0.js. */
(function(jQuery){var versionParts=jQuery.fn.jquery.split('.'),majorVersion=parseInt(versionParts[0]),minorVersion=parseInt(versionParts[1]),patchVersion=parseInt(versionParts[2]),isPreReleaseVersion=(patchVersion.toString()!==versionParts[2]);if((majorVersion>3)||(majorVersion===3&&minorVersion>4)||(majorVersion===3&&minorVersion===4&&patchVersion>0)||(majorVersion===3&&minorVersion===4&&patchVersion===0&&!isPreReleaseVersion))return;jQuery.extend=jQuery.fn.extend=function(){var options,name,src,copy,copyIsArray,clone,target=arguments[0]||{},i=1,length=arguments.length,deep=false;if(typeof target==="boolean"){deep=target;target=arguments[i]||{};i++};if(typeof target!=="object"&&!jQuery.isFunction(target))target={};if(i===length){target=this;i--};for(;i<length;i++)if((options=arguments[i])!=null)for(name in options){copy=options[name];if(name==="__proto__"||target===copy)continue;if(deep&&copy&&(jQuery.isPlainObject(copy)||(copyIsArray=Array.isArray(copy)))){src=target[name];if(copyIsArray&&!Array.isArray(src)){clone=[]}else if(!copyIsArray&&!jQuery.isPlainObject(src)){clone={}}else clone=src;copyIsArray=false;target[name]=jQuery.extend(deep,clone,copy)}else if(copy!==undefined)target[name]=copy};return target}})(jQuery)
/* Source and licensing information for the above line(s) can be found at http://18.223.20.109/core/assets/vendor/jquery/jquery-extend-3.4.0.js. */