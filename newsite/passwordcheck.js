var password = "123456";
var inputPass = "";

var HTMLsnippet = '<div class="downloadbtn"><p><a href="dl/zenith.zip">Click HERE to download the full recording in High Quality MP3 format</a></p></div>';

while (true) {
	inputPass = prompt("Insert the password to access the download section, or type ' quit' to abort");
	if (inputPass === "quit") { 
		break ; 
	} else {
				if (inputPass === password) {
			document.write(HTMLsnippet);
			break;			
		} else {
			alert ("Incorrect password, try again");
		}		
	}	
}