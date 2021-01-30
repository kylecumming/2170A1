<?php
						$toCheck = isset($_POST['to']);
						$subjectCheck = isset($_POST['subject']);
						$messageCheck = isset($_POST['message']);
	
						if($toCheck && $subjectCheck && $messageCheck){
							$to = $_POST['to'];
							$firstIni = substr($to,0,1);
							$lastName = explode(" ", $to);
							$fullMessage = "From: " . $_POST['to'] . "\n\nDate: " . date('j F Y') . "\n\nSubject: " . $_POST['subject'] . "\n\nMessage:\n" . $_POST['message'] ."\n";
							$fileName = "sent/$firstIni-".date('j-F-Y').".txt";
							if(!file_exists($fileName)){
								$fileHandler = fopen($fileName, 'w') or die("Cant create file");
							}
							$write = file_put_contents($fileName, $fullMessage, FILE_WRITE | LOCK_EX);
							if($write == false){
								die("error writing file");
							}
						}
						else{
							die('no form data');
						}
						?>