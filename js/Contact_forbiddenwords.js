	
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
	