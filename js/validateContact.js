document.getElementById("contact-form").addEventListener("click", ValidateContactForm);
function ValidateContactForm(){
		
		var full_name_field = document.getElementById('fullname');
		var email_field = document.getElementById('email_addr');
		var subject_field = document.getElementById('subjectField');
		var message_box_field = document.getElementById('textarea-box');


		if (full_name_field == ""){
			alert("Full Name field must be filled");
			return false;
		}
		if (email_field == ""){
			alert("Emaill Address field must be filled in");
			return false;
		}
		if (subject_field == ""){
			alert("Subject field must be filled in");
			return false;
		}	
		if (message_box_field == ""){
			alert("Message field must be filled out");
			return false;
		}
	
		/*var emailadd = document.getElementById('email_addr');*/
		var filter = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		if (!filter.test(email_field.value)){
			alert("Please provide a valid email address. Example: oinkster159@sbcglobal.net");
			return false;
		}
}
	
    /*********************************
	* RESTRICT KEYWORDS IN MESSAGE BOX
	*8********************************/
	$(document).ready(function() {
		$('#textarea-box').keyup(function() {
			var textBoxValue = $(this).val();
			console.log(textBoxValue);

			var forbidden = [
				'http', 'https', '.py', '.php', '.exe', '.diff', '.sh',
				'.c', '.wnry', '.java', '.json', '.ps1', '.js', '.pl',
				'.pas', '.rb', '.r', '.sql', '.xml', '.html', 'micro', 'zepto','cerber',
		 		'locky','cerber3','cryp1','mole','onion','axx','osiris','crpyz','crypt',
				'locked', 'odin','ccc', 'cerber2','sage', 'globe','exx','1txt', 'decrypt2017',
				'encrypt','ezz','zzzzz', 'MERRY', 'enciphered', 'r5a','aesir','ecc', 'enigma',
				'cryptowall', 'breaking_bad','angelamerkel','windows10','PEGS1', '1cbu1','venusf',
				'rnsmwr', 'evillock','realfs0ciety@sigiant.org.fs0ciety','zorro', 'hush', 'bin',
				'crypte','dll','rokku','mbed','djvu','.bat','gero','.hese','.seto','.peta', 
				'.moka','.meds','.kvga','.domn','.karl','.nesa','.noos','.kuub','.reco',
				'.bora','.nols','.werd','.coot','.derp','.meka','.toec','.kodg'		
			
			];

			for (var i =0; i < forbidden.length; i++){
				if(textBoxValue.search(forbidden[i]) > -1){
					textBoxValue = textBoxValue.replace(forbidden[i], '');
				}
			}
			$(this).val(textBoxValue);
		});
	});
	

