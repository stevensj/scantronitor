<?
  # ===========================================================
  # file name:  index.php
  # purpose:    the main page, also provides an FAQ
  # created:    June 2011
  # authors:    Don Franke
  #             Josh Stevens
  #             Peter Babcock
  # ===========================================================
?>
<!----------------------------------------------------------------
  Scantronitor
  Front-end for the Qualys API
  Use this to provide visibility into scanning activity
  Created by Don Franke, Josh Stevens and Pete Babcock, 2011
    
  Licensed under the MIT license: http://www.opensource.org/licenses/mit-license.php 
  ---------------------------------------------------------------->
<html>
	<head>
		<link rel=stylesheet href=scantronitor.css>
		</link>
		<title>Scantronitor</title>	</head> 
	<body background=images/scantronitor.png>
	<? include "header.php";?>
	<p align="center">
		<table id=simplebox width=800>
			
			<tr><td class="altrow">
					<h3>What is Scantronitor?</h3>
				    The security department has deployed a 
				    Vulnerability Assessment scanning solution 
				    that looks for software vulnerabilities in 
				    the operating system, applications and 
				    databases.
			</td></tr>
			<tr><td>
					<h3>What does "Scan" mean?</h3> 
				    The Information Security department performs 
				    regularly scheduled vulnerability assessment 
				    scanning.
				    
				    <br><br>
			</td></tr>
			<tr><td class="altrow">
					<h3>How is my box being scanned?</h3>
					The Information Security department performs 
				    regularly scheduled vulnerability assessment 
				    scanning.
			  <br><br>
			</td></tr>
			<tr><td>
					<h3>When was my box scanned?</h3> 
					You can click on the <a href="past">Past</a> selection and 
					then type in the IP Address of the box 
					in question to see what day and time 
					your box was scanned (up to 20 IP 
					addresses may be checked at a time.)
				    
				    
				    <br><br> 
			</td></tr>
			<tr><td class="altrow">
					<h3>Is my box currently being scanned?</h3> 
					You can click on the <a 
					href="present"><b>Present</b></a> selection to 
					determine if your server is actively being scanned right 
					now.<br><br> 
			</td></tr>
			<tr><td>
					<h3>When will my box be scanned next?</h3>
					The Information Security department 
					maintains a scan schedule to ensure IP 
					addresses are reviewed frequently as new 
					vulnerabilities are introduced in the 
					public domain.  You can click on the 
					<a href="future">Future</a> selection to determine when it is 
					scheduled to be scanned next.
				    
				    <br><br>
			</td></tr>
			<tr><td class="altrow">
					<h3>Why is my box being scanned?</h3>
					Scanning allows vulnerabilities and 
					exposures to be identified and 
					remediated by IT Operations before a 
					malicious entity can discover and 
					leverage them in an attack against the 
					company.
			<br><br>
			</td></tr>
			<tr><td>
					<h3>I don't want my box to be scanned</h3> 
					The goal is to scan every IP Address at 
					the company at least once a week. This provides company leadership 
					with the information they need to make educated risk 
					decisions. Any exceptions to this standard increases the 
					risk to the organization. 
			<br><br>
			</td></tr> 
			<tr><td class="altrow">
					<h3>Your scanner broke my box!</h3>	
				    Please contact the XYZ_Group mailbox and 
			provide the IP address of the impacted hosts and any 
			evidence that you possess that will help determine that 
			the scanner was at fault. .<br><br>
			</td></tr>
			
		</table> 
		</p>
		<br><br><br> 
		
	</body>
</html>
