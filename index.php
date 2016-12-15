<!-- Úterý 7. června 2005 21:10 -->
<HTML>
<HEAD>
	<TITLE>MD5 cracker</TITLE>
	<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=charset=ISO-8859-2">
	<META NAME="Author" CONTENT="savalo">
	<STYLE TYPE="text/css">
		body {
			background-color: #000000;
			margin-top: 50px;
			margin-left: 100px;
			font-family: Verdana,Arial;
			color: #999999;
			}
	</STYLE>
</HEAD>
<BODY>

<FORM ACTION="index.php" METHOD="POST">
	<P>Insert chars separated by "," :&nbsp;
	<INPUT TYPE="text" NAME="chars" VALUE="a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z" SIZE="64">
	<P>Insert MD5 hash (32 chars) : &nbsp;&nbsp;
	<INPUT TYPE="text" NAME="hash" VALUE="ac10f29071856a3d0ad08c977ba5604d" SIZE="33" MAXLENGTH="32">
	<P><INPUT TYPE="submit" NAME="potvrzeni" VALUE="&nbsp;CR4CK 1T !&nbsp;">
<FORM>
<P>

<?php
//md5(ajeto) : ac10f29071856a3d0ad08c977ba5604d

error_reporting(0);

function crackit($pocet,$P,$heslo)
{
	$start = getmicrotime();
	
	if ($pocet>=1)
	{
		// jeden znak
		for ($a=0;$a<$pocet;$a+=1)
		{
			if (MD5($P[$a])==$heslo)
			{
				$end = getmicrotime();
				$sec = $end - $start;
				echo "<BR>Password with 1 char has been cracking for ".$sec." s";
				echo "<P>PASS: <B>".$P[$a]."</B>";	
				exit;
			}
		}
	}

	if ($pocet>=2)
	{	
		// dva znaky
		for ($a=0;$a<$pocet;$a+=1)
		{
			for ($b=0;$b<$pocet;$b+=1)
			{
				if (MD5($P[$a].$P[$b])==$heslo)
				{
					$end = getmicrotime();
					$sec = $end - $start;
					echo "<BR>Password with 2 chars has been cracking for ".$sec." s";
					echo "<P>PASS: <B>".$P[$a].$P[$b]."</B>";	
					exit;
				}
			}
		}
	}

	if ($pocet>=3)
	{
		// tri znaky
		for ($a=0;$a<$pocet;$a+=1)
		{
			for ($b=0;$b<$pocet;$b+=1)
			{
				for ($c=0;$c<$pocet;$c+=1)
				{
					if (MD5($P[$a].$P[$b].$P[$c])==$heslo)
					{
						$end = getmicrotime();
						$sec = $end - $start;
						List($s,$ms) = Explode(".",$sec);
						echo "<BR>Password with 3 chars has been cracking for ".date("i : s.",$s).$ms." s";
						echo "<P>PASS: <B>".$P[$a].$P[$b].$P[$c]."</B>";	
						exit;
					}
				}
			}
		}	
	}

	if ($pocet>=4)
	{	
		// ctyri znaky
		for ($a=0;$a<$pocet;$a+=1)
		{
			for ($b=0;$b<$pocet;$b+=1)
			{
				for ($c=0;$c<$pocet;$c+=1)
				{
					for ($d=0;$d<$pocet;$d+=1)
					{
						if (MD5($P[$a].$P[$b].$P[$c].$P[$d])==$heslo)
						{
							$end = getmicrotime();
							$sec = $end - $start;
							List($s,$ms) = Explode(".",$sec);
							echo "<BR>Password with 4 chars has been cracking for ".date("i : s.",$s).$ms." s";
							echo "<P>PASS: <B>".$P[$a].$P[$b].$P[$c].$P[$d]."</B>";	
							exit;
						}
					}
				}
			}
		}
	}

	if ($pocet>=5)
	{	
		// pet znaku
		for ($a=0;$a<$pocet;$a+=1)
		{
			for ($b=0;$b<$pocet;$b+=1)
			{
				for ($c=0;$c<$pocet;$c+=1)
				{
					for ($d=0;$d<$pocet;$d+=1)
					{
						for ($e=0;$e<$pocet;$e+=1)
						{
							if (MD5($P[$a].$P[$b].$P[$c].$P[$d].$P[$e])==$heslo)
							{
								$end = getmicrotime();
								$sec = $end - $start;
								List($s,$ms) = Explode(".",$sec);
								echo "<BR>Password with 5 chars has been cracking for ".date("i : s.",$s).$ms." s";
								echo "<P>PASS: <B>".$P[$a].$P[$b].$P[$c].$P[$d].$P[$e]."</B>";	
								exit;
							}
						}
					}
				}
			}
		}
	}
	
	if ($pocet>=6)
	{	
		// sest znaku
		for ($a=0;$a<$pocet;$a+=1)
		{
			for ($b=0;$b<$pocet;$b+=1)
			{
				for ($c=0;$c<$pocet;$c+=1)
				{
					for ($d=0;$d<$pocet;$d+=1)
					{
						for ($e=0;$e<$pocet;$e+=1)
						{
							for ($f=0;$f<$pocet;$f+=1)
							{
								if (MD5($P[$a].$P[$b].$P[$c].$P[$d].$P[$e].$P[$f])==$heslo)
								{
									$end = getmicrotime();
									$sec = $end - $start;
									List($s,$ms) = Explode(".",$sec);
									echo "<BR>Password with 6 chars has been cracking for ".date("i : s.",$s).$ms." s";
									echo "<P>PASS: <B>".$P[$a].$P[$b].$P[$c].$P[$d].$P[$e].$P[$f]."</B>";	
									exit;
								}
							}
						}
					}
				}
			}
		}
	}

	if ($pocet>=7)
	{	
		// sedm znaku
		for ($a=0;$a<$pocet;$a+=1)
		{
			for ($b=0;$b<$pocet;$b+=1)
			{
				for ($c=0;$c<$pocet;$c+=1)
				{
					for ($d=0;$d<$pocet;$d+=1)
					{
						for ($e=0;$e<$pocet;$e+=1)
						{
							for ($f=0;$f<$pocet;$f+=1)
							{
								for ($g=0;$g<$pocet;$g+=1)
								{
									if (MD5($P[$a].$P[$b].$P[$c].$P[$d].$P[$e].$P[$f].$P[$g])==$heslo)
									{
										$end = getmicrotime();
										$sec = $end - $start;
										List($s,$ms) = Explode(".",$sec);
										echo "<BR>Password with 7 chars has been cracking for ".date("i : s.",$s).$ms." s";
										echo "<P>PASS: <B>".$P[$a].$P[$b].$P[$c].$P[$d].$P[$e].$P[$f].$P[$g]."</B>";	
										exit;
									}
								}
							}
						}
					}
				}
			}
		}
	}
	
	if ($pocet>=8)
	{	
		// osm znaku
		for ($a=0;$a<$pocet;$a+=1)
		{
			for ($b=0;$b<$pocet;$b+=1)
			{
				for ($c=0;$c<$pocet;$c+=1)
				{
					for ($d=0;$d<$pocet;$d+=1)
					{
						for ($e=0;$e<$pocet;$e+=1)
						{
							for ($f=0;$f<$pocet;$f+=1)
							{
								for ($g=0;$g<$pocet;$g+=1)
								{
									for ($h=0;$h<$pocet;$h+=1)
									{
										if (MD5($P[$a].$P[$b].$P[$c].$P[$d].$P[$e].$P[$f].$P[$g].$P[$h])==$heslo)
										{
											$end = getmicrotime();
											$sec = $end - $start;
											List($s,$ms) = Explode(".",$sec);
											echo "<BR>Password with 8 chars has been cracking for ".date("i : s.",$s).$ms." s";
											echo "<P>PASS: <B>".$P[$a].$P[$b].$P[$c].$P[$d].$P[$e].$P[$f].$P[$g].$P[$h]."</B>";	
											exit;
										}
									}
								}
							}
						}
					}
				}
			}
		}
	}
	
	$end = getmicrotime();
	$sec = $end - $start;
	echo "<BR>Password wasn't cracked in ".$sec." s";
}#

function getmicrotime()
{
	list($usec, $sec) = explode(" ",microtime());
	return ((float)$usec + (float)$sec);
}


#############################


if (!IsSet($_REQUEST['hash']) || !IsSet($_REQUEST['chars']))
{
	echo "<B>F1LL TH3 F0RM !</B>";
}
else
{
	$token = strtok($_REQUEST['chars'],",");
	
	while ($token)
	{
		$array[] = $token;		
		
		$token = strtok(",");
	}

	crackit(count($array),$array,$_REQUEST['hash']);
}

?>

</BODY>
</HTML>