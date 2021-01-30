<?php
					//reading from files
					
					$file = opendir("sent");

					while(($files = readdir($file)) !== FALSE){
						if($files != '.' && $files != '..'){
					$fileName = "sent/$files";
					$fileHandler = fopen($fileName, "r");
					echo "<tr>";
					if(!$fileHandler){
						die("Unable to open file, $fileName");
					}
					
					while(!feof($fileHandler)){
						$line = fgets($fileHandler);
						$from = explode("From:", $line);
						$subject = explode("Subject:", $line);
						$date = explode("Date:", $line);
						echo "<td>$from[1]</td>";
						echo "<td>$subject[1]</td>";
						echo "<td>$date[1]</td>";
						
					}
					
					fclose($fileHandler);
					echo "</tr>";
					}}
					?>