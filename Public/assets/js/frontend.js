var _obj = Class({
	fs :{
		signup:{
			socialLogin:function(userEmail,userFirstName,userLastName,userGoogleId,btnElement,messagesSuccess,obj){
				qobj.send.json($$.address_Aa,
					obj.json.signUpGoogle(userEmail,userFirstName,userLastName,userGoogleId),
					function alphaHandler() {
						
						if(qlabs.serverResponse(this,true,btnElement) == 'loginTrue'){
							//user already exist
							//write a message 
							__dom.appendObject(el.span, messagesSuccess, id('alert-success'), '')
							
						}else{
							//new user
							//collect require input and button then store params
							var data = qlabs.read.json(this.responseText),
								inputSignup = qobj.get.element(id('socialSignUp'),[el.input]),
								btnSignup = qobj.get.element(id('socialSignUp'),[el.button])[0];
								
								$('#socialSignUp').modal('toggle')
								inputSignup[0].value = data.fullName;
								inputSignup[2].value = data.email;
								
								//submit social
								qobj.process(id('alert-error-extra'),inputSignup,
								['User Name','Mobile Number','Email Address','Password','Retype Password'],
								['','phone','email','password','password'],
								btnSignup,
								function(isBoolean){
									btnSignup.innerHTML = 'Loading'
									var inputVal = qobj.get.value(id('socialSignUp'),el.input),
										name = inputVal[0],
										mobile = inputVal[1],
										email = inputVal[2],
										pass = CryptoJS.MD5(inputVal[3]).toString()
										qobj.send.json($$.address_Aa,
											obj.json.signup(name,mobile,email,pass),
											function alphaHandler() {
											btnSignup.innerHTML = 'Submit';

											//write a message 
											__dom.appendObject(el.span, messagesSuccess, id('alert-success-extra'), '')
											jQuery(btnSignup).addClass('disabled');
										})
								})
						}
				})
			}
		},
		help:{
			collapseFaq:function(parent,iParent){
				$(parent).on('hide.bs.collapse', function () {
					$(iParent).find('i').addClass('fa-plus-square-o').removeClass('fa-minus-square-o')
				})
				$(parent).on('show.bs.collapse', function () {
					$(iParent).find('i').addClass('fa-minus-square-o').removeClass('fa-plus-square-o')
				})
			}
		},
		pricing:{
			dotHover:function(labelGroup){
				for(var index=0; index<labelGroup.length;index++){
					listener.add(labelGroup[index],'hover',function (index,element) {
						jQuery(element).find('i').removeClass('fa-circle-o').addClass('fa-circle')
						for(var indexInner=0; indexInner<labelGroup.length;indexInner++){
							if(index !== indexInner){
								jQuery(labelGroup[indexInner]).find('i').removeClass('fa-circle').addClass('fa fa-circle-o')
							}
						}
					
						listener.add(element,'hoverout',function (activeEl) {
							jQuery(activeEl).find('i').removeClass('fa-circle').addClass('fa fa-circle-o')
						}.bind(null,element))
					}.bind(null,index,labelGroup[index]))
					
				}
			},
			dotClick:function(labelGroup,func){
				for(var index=0; index<labelGroup.length;index++){
					listener.add(labelGroup[index],'do',function (index,element) {
						jQuery(element).find('i').addClass('color-blue').removeClass('color-purple')
						for(var indexInner=0; indexInner<labelGroup.length;indexInner++){
							if(index !== indexInner){
								jQuery(labelGroup[indexInner]).find('i').removeClass('color-blue')
							}
						}
						
						!!func ? func.call(this,index,element):null;
					}.bind(null,index,labelGroup[index]))
				}
			},
			dotClickExtra:function(labelGroup,func){
				for(var index=0; index<labelGroup.length;index++){
					listener.add(labelGroup[index],'do',function (index,element) {
						jQuery(element).find('i').addClass('color-blue').removeClass('color-purple')
						!!func ? func.call(this,index,element):null;
						
						
					}.bind(null,index,labelGroup[index]))
				}
			},
			autoChangeLabelMemory:function(mainExceptionArr,labelMemory,indexClick){
				for(var index=0; index<labelMemory.length;index++){
					jQuery(labelMemory[index]).parents().eq(1).removeClass('hidden');
					for(var x=0 in mainExceptionArr[1][indexClick]){
						if(index == mainExceptionArr[1][indexClick][x]){
							jQuery(labelMemory[index]).parents().eq(1).addClass('hidden')
						}
					}
				}
			},
			addPricingItems:function(attributesName,idName,activeEl){
				var attribEl = activeEl.getAttribute(attributesName),
					priceVal = activeEl.getAttribute('pricing-value');
					
					mainHtml = '<li selected-item="'+attribEl+'" class="pointer" pricing-value="'+priceVal+'"><i class="fa fa-plus-circle" aria-hidden="true"></i> '+ attribEl +'<li>';
					jQuery(id(idName)).html(mainHtml);
					
					if(idName == 'cpu-infra'){
						resetCPU = ['speed-infra','memo-infra','strage-infra'];
						for(var x=0 in resetCPU){
							id(resetCPU[x]).innerHTML = '';
						}
					}
					
						
			},
			addPricingItemsExtra:function(attributesName,idName,activeEl){
				var attribActiveEl = activeEl.getAttribute(attributesName),
					netExist = false;
					liSelectedNetwork = qobj.get.element(id(idName),[el.li]),
					priceVal = activeEl.getAttribute('pricing-value'),
					mainHtml = '<li class="pointer" atr-value="'+attribActiveEl+'" selected-item="'+attribActiveEl+'" pricing-value="'+priceVal+'"><i class="fa fa-plus-circle"></i> '+ attribActiveEl +'<li>';
					
					if(liSelectedNetwork.length == 0)
						jQuery(id(idName)).append(mainHtml);
					else {	
						for(var x=0 in liSelectedNetwork){	
							if(liSelectedNetwork[x].getAttribute(attributesName) == attribActiveEl){
								netExist = true;
								break;
							}
						
						}
						
						if(!netExist)
							jQuery(id('network-infra')).append(mainHtml);
					}
			},
			fixedPriceClick:function(activeEl){
				//for pricing fixed 
				var liSelected = qobj.get.element(id('price-container'),[el.li]);
				var labelContainer = qobj.get.element(id('label-container'),[el.label]);
				var totPricing = [];
				
				for(var x=0 in liSelected){
					var liAtrrib = liSelected[x].getAttribute('selected-item'),
						liPricing = liSelected[x].getAttribute('pricing-value');
						if(liPricing != null){
							//collect selected price
							totPricing.push(parseInt(liPricing))
						}
						
						if(liAtrrib != null){
							//count pricing tot 

							//trigger fixed pricing events
							
							//prevent click propagation
						var elClone = liSelected[x].cloneNode(true);
							liSelected[x].parentNode.replaceChild(elClone, liSelected[x]);
							
							//hover icon minus + color
							listener.add(elClone,'hover',function (element) {
								jQuery(element).find('i').addClass('fa-minus-circle color-red').removeClass('fa-plus-circle color-white')
							}.bind(null,elClone))
							
							//hoverout icon plus + color
							listener.add(elClone,'hoverout',function (element) {
								jQuery(element).find('i').addClass('fa-plus-circle color-white').removeClass('fa-minus-circle color-red')
							}.bind(null,elClone))
								
							//click exe function 	
							listener.add(elClone,'do',function (element,liAtrrib,pricingSelected) {
								
								for(var x=0 in labelContainer){
									if(labelContainer[x].getAttribute('atr-value') == liAtrrib){
										jQuery(labelContainer[x]).find('i').addClass('color-purple').removeClass('color-blue')
									}
								}
								
								//pengurangan tot pricing
								var valueTot = parseInt(id('tot-pricing').getAttribute('tot-pricing')) - pricingSelected;
								id('tot-pricing').setAttribute('tot-pricing', valueTot);
								id('tot-pricing').innerHTML = valueTot.toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,');
								element.remove()
									
							}.bind(null,elClone,liAtrrib,parseInt(liPricing)))
						}
				}
				
				//dump selected tot price
				//penjumlahan tot pricing
				var tPrice = 0;
				for(var x=0 in totPricing){
					tPrice += parseInt(totPricing[x]);
				}
				
				id('tot-pricing').setAttribute('tot-pricing', tPrice);
				id('tot-pricing').innerHTML = tPrice.toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,');
			}
		}
	},
	json:{
		login:function(mail,pass){
			return { 
			"userLayer":
				[
					{
						'action':'user-login',
						'mail':mail,
						'pass':pass
					}
				]
			}
		},
		signup:function(name,mobile,email,pass){
			return { 
			"userLayer":
				[
					{
						'action':'user-signup',
						'name':name,
						'mobile':mobile,
						'email':email,
						'pass':pass
					}
				]
			}
		},
		emailChecked:function(email){
			return { 
			"userLayer":
				[
					{
						'action':'user-email-checking',
						'email':email
					}
				]
			}
		},
		contact:function(name,email,subject,subjectText){
			return { 
			"userLayer":
				[
					{
						'action':'user-contact',
						'name':name,
						'subject':subject,
						'email':email,
						'subjectText':subjectText
					}
				]
			}
		},
		signUpGoogle:function(userEmail,userFirstName,userLastName,userGoogleId){
			return { 
			"userLayer":
				[
					{
						'action':'user-google-signup',
						"email":userEmail,
						"firstname":userFirstName,
						"lastname":userLastName,
						"googleid":userGoogleId
					}
				]
			}
		},
		scrambled:function(answer,intVar){
			return { 
			"userLayer":
				[
					{
						'action':'user-scrambled',
						"answer":answer,
						'index':intVar
					}
				]
			}
		}
	}, 
	thirdParty:{
		google:{
			login:function(btn,func){
				function loginCallback(result){
					if(result['status']['signed_in'])
					{ 
						var request = gapi.client.plus.people.get({
							'userId': 'me'
						});
						request.execute(function (resp){
							var email = '';
							if(resp['emails']){
								for(i = 0; i < resp['emails'].length; i++)
								{
									if(resp['emails'][i]['type'] == 'account')
									{
										userEmail = resp['emails'][i]['value'];
									}
								}
							}
							userFirstName = resp['name']['givenName'];
							userLastName = resp['name']['familyName'];
							userGoogleId = resp['id'];
							
							//callback
							!!func ? func.call(this,userEmail,userFirstName,userLastName,userGoogleId):null;
						})
						
					}   
					
					listener.on(btn);
				}					
				listener.add(btn,'do',function () {
					listener.off(btn),btn.innerHTML = "LOADING";
					
					var options = {
						'clientid' : '590088232868-00hg4vrt371mnhud7v7dqe862imfbgag.apps.googleusercontent.com', //You need to set client id
						'callback' : loginCallback,
						'cookiepolicy' : 'single_host_origin',
						'approvalprompt':'force',
						'scope' : 'https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/plus.profile.emails.read'
					}
					gapi.auth.signIn(options);
				})
			}
		}
	}
})


var _bizgio =  Class(_obj,{
	pricing:function(){ 
		var obj = new _obj(),
			labelCpu = qobj.get.element(id('cpu'),[el.label]),
			labelSpeed = qobj.get.element(id('speed'),[el.label]),
			labelMemory = qobj.get.element(id('memory'),[el.label]),
			labelStorage = qobj.get.element(id('storage'),[el.label]),
			labelOes = qobj.get.element(id('oes'),[el.label]),
			labelNetwork = qobj.get.element(id('network'),[el.label]),
			labelDstorage = qobj.get.element(id('dstorage'),[el.label]);
			
			obj.fs.pricing.dotHover(labelCpu);
			obj.fs.pricing.dotHover(labelSpeed);
			obj.fs.pricing.dotHover(labelMemory);
			obj.fs.pricing.dotHover(labelStorage);
			obj.fs.pricing.dotHover(labelOes);
			obj.fs.pricing.dotHover(labelNetwork);
			obj.fs.pricing.dotHover(labelDstorage);

			var mainExceptionArr = Array([ [3,4,5],
									[0,1,2,4,5],
									[0,1,2,3,5],
									[0,1,2,3,4]
								],[
									[1,2,3,4,5,6,7,8,9],
									[0,4,5,6,7,8,9],
									[0,1,5,6,7,8,9],
									[0,1,2,5,8,9],
									[0,1,2,3,4,9],
									[0,1,2,3,4,5,6,7,8]
								]);
							
			obj.fs.pricing.dotClick(labelCpu,function(indexClick,activeEl){
				//exe speed
				for(var index=0; index<labelSpeed.length;index++){
					jQuery(labelSpeed[index]).parents().eq(1).removeClass('hidden')
					for(var x=0 in mainExceptionArr[0][indexClick]){
						if(index == mainExceptionArr[0][indexClick][x]){
							jQuery(labelSpeed[index]).parents().eq(1).addClass('hidden')
						}
					}
				}
				
				//exe memory
				var indexMemo;
				if(indexClick == 0)
					indexMemo = 0;
				else if(indexClick == 1)
					indexMemo = 3;
				else if(indexClick == 2)
					indexMemo = 4;	
				else if(indexClick == 3)
					indexMemo = 5;		
				
				obj.fs.pricing.autoChangeLabelMemory(mainExceptionArr,labelMemory,indexMemo);
				obj.fs.pricing.addPricingItems('atr-value','cpu-infra',activeEl);
				obj.fs.pricing.fixedPriceClick(activeEl)
				
				
			});
			
			obj.fs.pricing.dotClick(labelSpeed,function(indexClick,activeEl){
				obj.fs.pricing.autoChangeLabelMemory(mainExceptionArr,labelMemory,indexClick);
				obj.fs.pricing.addPricingItems('atr-value','speed-infra',activeEl);
				obj.fs.pricing.fixedPriceClick(activeEl)
			});
			
			obj.fs.pricing.dotClick(labelMemory,function(indexClick,activeEl){
				obj.fs.pricing.addPricingItems('atr-value','memo-infra',activeEl);
				obj.fs.pricing.fixedPriceClick(activeEl)
			});
			
			obj.fs.pricing.dotClick(labelStorage,function(indexClick,activeEl){
				obj.fs.pricing.addPricingItems('atr-value','strage-infra',activeEl);
				obj.fs.pricing.fixedPriceClick(activeEl)
			});
			
			obj.fs.pricing.dotClick(labelOes,function(indexClick,activeEl){
				obj.fs.pricing.addPricingItems('atr-value','os-infra',activeEl);
				obj.fs.pricing.fixedPriceClick(activeEl)
			});
			
			obj.fs.pricing.dotClickExtra(labelNetwork,function(indexClick,activeEl){
				obj.fs.pricing.addPricingItemsExtra('atr-value','network-infra',activeEl)
				obj.fs.pricing.fixedPriceClick(activeEl)
			});
			
			obj.fs.pricing.dotClickExtra(labelDstorage,function(indexClick,activeEl){
				obj.fs.pricing.addPricingItemsExtra('atr-value','network-infra',activeEl)
				obj.fs.pricing.fixedPriceClick(activeEl)
			});
			
			//fixed price tot
			var parentTop = $(".fixed-point");
			var mainInit = $(".main-init");
			var targetTop = parentTop.offset().top;
			$(window).scroll(function(){
				if ( $(this).width() > 1024 ) {
					if ($(window).scrollTop() >= targetTop) {
						parentTop.addClass('price-fixed').addClass('col-md-3').removeClass('col-md-4 price-absolute')
						mainInit.addClass('main-initial')
					}else{
						parentTop.removeClass('price-fixed price-absolute').addClass('col-md-4').removeClass('col-md-3')
						mainInit.removeClass('main-initial')
					}
				}else{
					parentTop.addClass('mt70')
				}
			});
			
			var parentBottom = $(".end-point");
			var targetBottom = parentBottom.offset().top;
			$(window).scroll(function(){
				if ( $(this).width() > 1024 ) {
					if ($(window).scrollTop() >= targetBottom) {
						parentTop.removeClass('price-fixed').addClass('price-absolute').addClass('col-md-4').removeClass('col-md-3')
					}
				}
			})
	},
	help:function(){
		var obj = new _obj();
		arrFaqID = [1,2,3,4,5,6,7,8,9,10,11,12];
		for(var x=0 in arrFaqID){
			obj.fs.help.collapseFaq('#faq'+arrFaqID[x],'#faq'+arrFaqID[x]+'-i')
		}
		
		var parentTop = $(".faq-point");
		var targetTop = parentTop.offset().top;
		$(window).scroll(function(){
			if ($(window).scrollTop() >= targetTop) {
				parentTop.addClass('nav-pills')
			}else{
				parentTop.removeClass('nav-pills')
			}
		});
	},
	homepage:function(){
		/*landing menu*/
		/*manual feedback slide show*/
		var liFeedback = qobj.get.element(id('list-feedback'),[el.li]),
			liFeedbackSlide =qobj.get.element(id('content-feedback'),[el.li]);

		for(var index=0; index<liFeedback.length;index++){
			listener.add(liFeedback[index],'do',function(indexEl, indexBtn){
				delay(function(){
					//filter none element
					for(var indexInner=0; indexInner<liFeedbackSlide.length;indexInner++){
						var styleEl = liFeedbackSlide[indexInner].style.display;
						if(styleEl != 'none'){
							var elObjA = jQuery(liFeedbackSlide[indexInner]);
							elObjA.fadeOut();
						}
					}

					var elObjB = jQuery(liFeedbackSlide[indexBtn]);
						elObjB.fadeIn(1200);
				},250)
			}.bind(null, liFeedback[index],index));
		}
		
	},
	login:function(){
		var obj = new _obj(),
			parent = id('login-page'),
			inptElement = qobj.get.element(parent,[el.input]),
			btnArr = qobj.get.element(parent,[el.button]),
			btnElement = btnArr[0];
			btnSocial = btnArr[1];
			
			//social signup
			//fire to click button
			obj.thirdParty.google.login(btnSocial,function(userEmail,userFirstName,userLastName,userGoogleId){
				obj.fs.signup.socialLogin(userEmail,userFirstName,userLastName,userGoogleId,btnElement,$$.message_Zx,obj);
			});
			
			//submit
			qobj.process(null,inptElement,
						['Email','Password'],
						['email','password'],
						btnElement,
						function(isBoolean){
							btnElement.innerHTML = 'Loading'
							var inputVal = qobj.get.value(parent,el.input),
								user = inputVal[0],
								passMd5 = CryptoJS.MD5(inputVal[1]).toString()
								qobj.send.json($$.address_Aa,
									obj.json.login(user,passMd5),
									function alphaHandler() {
									btnElement.innerHTML = 'Submit'
									//server response
									if(qlabs.serverResponse(this,true,btnElement) == 'loginTrue'){
									
										//write a message 
										__dom.appendObject(el.span, $$.message_Zx, id('alert-success'), '')
										
									}
								})
						}
			)
	},
	signup:function(){
		var obj = new _obj(),
			parent = id('signup-page'),
			inptElement = qobj.get.element(parent,[el.input]),
			btnArr = qobj.get.element(parent,[el.button]),
			btnElement = btnArr[0],
			btnSocial = btnArr[1],
			emailVerfy,
			emailParent = id('alert-email');
			
			//check email already exist or not
			emailVerfy = inptElement[2],
			listener.add(emailVerfy,'keyup',function(event){
				var activeIn = this,	
					emailVal = activeIn.value;
					
					//delay execute this keyup 1 second
					delay(function(){
						if(emailVal.emailValidate() === true && emailVal !== null){	
							emailParent.innerHTML = $$.message_Xp;
							qobj.send.json($$.address_Aa,
								obj.json.emailChecked(emailVal),
								function alphaHandler() {
								
									//handle serverResponse
									var data = qlabs.read.json(this.responseText);
									if(data.returnValue == true){
										emailParent.innerHTML = $$.message_zN;
									}else{
										emailParent.innerHTML = $$.message_zM;
									}
							})
						}else{
							
							emailParent.innerHTML = '';
						}
					},1000);
			})
			
			
			
			//social signup
			//fire to click button
			obj.thirdParty.google.login(btnSocial,function(userEmail,userFirstName,userLastName,userGoogleId){
				obj.fs.signup.socialLogin(userEmail,userFirstName,userLastName,userGoogleId,btnElement,$$.message_Xn,obj);
			});
			
			
			//submit
			qobj.process(null,inptElement,
						['User Name','Mobile Number','Email Address','Password','Retype Password'],
						['','phone','email','password','password'],
						btnElement,
						function(isBoolean){
							btnElement.innerHTML = 'Loading'
							var inputVal = qobj.get.value(parent,el.input),
								name = inputVal[0],
								mobile = inputVal[1],
								email = inputVal[2],
								pass = CryptoJS.MD5(inputVal[3]).toString()
								qobj.send.json($$.address_Aa,
									obj.json.signup(name,mobile,email,pass),
									function alphaHandler() {
									btnElement.innerHTML = 'Submit';
									
									//handle serverResponse
									if(qlabs.serverResponse(this,true,btnElement) == 'insertTrue'){

										//write a message 
										__dom.appendObject(el.span, $$.message_Xn, id('alert-success'), '')
										jQuery(btnElement).addClass('disabled');
									}
								})
						}
			)
	},
	contact:function(){
		var obj = new _obj(),
			parent = id('contact-page'),
			inptElement = qobj.get.element(parent,[el.input,el.textarea]),
			btnElement = qobj.get.element(parent,[el.button])[0];
			
			//submit
			qobj.process(null,inptElement,
						['User Name','Email Address','Subject','Subject Text'],
						['','email','',''],
						btnElement,
						function(isBoolean){
							btnElement.innerHTML = 'Loading'
							var inputVal = qobj.get.value(parent,[el.input,el.textarea]),
								name = inputVal[0],
								email = inputVal[1],
								subject = inputVal[2],
								subjectText = inputVal[3];
								
								qobj.send.json($$.address_Ab,
									obj.json.contact(name,email,subject,subjectText),
									function alphaHandler() {
									btnElement.innerHTML = 'Submit';
									
									//handle serverResponse
									if(qlabs.serverResponse(this,true,btnElement) == 'insertTrue'){
									
										//write a message 
										__dom.appendObject(el.span, $$.message_Ao, id('alert-success'), '')
										jQuery(btnElement).addClass('disabled');
									}
								})
			})
	},
	scrambled:function(){
		var obj = new _obj(),
			parent = id('scrambled');
			btnElement = qobj.get.element(parent,el.button)[0],
			inptElement = qobj.get.element(parent,el.input)[0],
			firstLoad = VidLib.firstWord(),
			intVar = 0,
			pPoint = id('point')
		
		//http://stackoverflow.com/questions/3943772/how-do-i-shuffle-the-characters-in-a-string-in-javascript
		
		function generateWord(firstLoad){
			function shuffelWord (word){
				var shuffledWord = '';
				var charIndex = 0;
				word = word.split('');
				while(word.length > 0){
					charIndex = word.length * Math.random() << 0;
					shuffledWord += word[charIndex];
					word.splice(charIndex,1);
				}
				return shuffledWord;
			}
			
			var string = firstLoad.split('.');
			intVar = string[1];
			var firstWordArr = shuffelWord(string[0]).split('')
				
			jQuery(id('rand-char')).html('');	
			for(var x=0 in firstWordArr){
				jQuery(id('rand-char')).append('<li class="m5">'+firstWordArr[x]+'</li>')
			}
		}
		
		generateWord(firstLoad)
		
		function sendUserInput(answer,event,intVar){
				jQuery(id('alert-error')).css({'display':'none'})
		
				if(event == 'click'){
					btnElement.innerHTML = 'Loading';
				}
							
				jQuery(btnElement).addClass('disabled');
				jQuery(inptElement).addClass('disabled');
				
				
				qobj.send.json($$.address_Ab,
					obj.json.scrambled(answer,intVar),
					function alphaHandler() {

					
					jQuery(btnElement).removeClass('disabled');
					jQuery(inptElement).removeClass('disabled');
					
					if(event == 'click'){
						btnElement.innerHTML = 'Submit';
					}
					
					//handle serverResponse
					var data = qlabs.read.json(this.responseText);
					if(data.returnValue == true){
						intVar = data.randInt
						firstLoad = data.randVal
						//clear
						inptElement.value = '';
						//generate new scrambled
						generateWord(firstLoad+'.'+intVar);
						
						//get plus
						pPoint.innerHTML = parseInt(pPoint.innerHTML) + 1;
					}else{	
						intVar = data.randInt
						firstLoad = data.randVal
						inptElement.value = '';
						//generate new scrambled
						generateWord(firstLoad+'.'+intVar);
						
					
						//write a message 
						__dom.appendObject(el.span, 'wrong answer', id('alert-error'), '')
						
						//get plus
						pPoint.innerHTML = parseInt(pPoint.innerHTML) - 1;
					}
					
				})
		}
		
		listener.add(btnElement,'do',function(){
			//press click
			var answer = qobj.get.value(parent,el.input)[0];
				sendUserInput(answer,'click',intVar)
			
		})
		
		listener.add(inptElement,'keypress',function(e){
			//press enter
			if(e.keyCode == 13){
				
				var answer = qobj.get.value(parent,el.input)[0]
					sendUserInput(answer,'enter',intVar)
			}
		})
	}
})


//build
var bizgio = new _bizgio;
	if(id('pricing-page')){
		bizgio.pricing();
		bizgio.help();
	} else if(id('help-page'))
		bizgio.help();
	else if(id('home-page'))
		bizgio.homepage();	
	else if(id('login-page')){
		bizgio.login();
	}else if(id('signup-page'))
		bizgio.signup();	
	else if(id('contact-page'))
		bizgio.contact();
	else if(id('scrambled'))
		bizgio.scrambled();


//***********//
//additional script
//small devices to display category menu
if(id('landing-menu')){
	var btnMenu =id('landing-menu'), containerMenu = id("container-menu"), containerContent = id("container-content");
	var currentToggle = 0;
	listener.add(btnMenu,'do',function(){
		JcontainerMenu = jQuery(containerMenu);
		JcontainerContent = jQuery(containerContent);

		if(currentToggle === 0){
			JcontainerMenu.animate({ "left": "+=240px" }, "fast" );
			JcontainerContent.animate({ "left": "+=240px" }, "fast" );
			currentToggle = 1;
		}else{
			JcontainerMenu.animate({ "left": "-=240px" }, "fast" );
			JcontainerContent.animate({ "left": "-=240px" }, "fast" );
			currentToggle = 0;
		}
	})
}

//load google gapi		
if(id('login-page') || id('signup-page')){
	function onLoadCallback(){
		gapi.client.setApiKey('AIzaSyA3VuJU3hfHU_yumCoA609fkoPVKjjNjtE'); 
		gapi.client.load('plus', 'v1',function(){});
	}

	(function() {
		var po = document.createElement('script'); 
			po.type = 'text/javascript'; 
			po.async = true;
			po.src = 'https://apis.google.com/js/client.js?onload=onLoadCallback';
		var s = document.getElementsByTagName('script')[0]; 
			s.parentNode.insertBefore(po, s);
	})();
}
	