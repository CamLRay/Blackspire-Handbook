
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css?v=<?php echo time(); ?>">
		<title>Blackspire Document Compendium</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>

	<body>
<?php
if($_SERVER["REMOTE_ADDR"]=="69.168.123.97-assd" && $_SERVER["REMOTE_ADDR"]!="::1"){
echo "<div class=broke>Under construction</div>";
}
else{









?>
<?php include_once("topnav.php");?>

<!--Sidebar Start

-->

<div class="sidebar">
<h1>Table of Contents</h1>
<!--sidebar contents start-->
<!--constitution sidebar-->	
	<div class="dropdown"><a href="#constitution">Constitution</a></div>
		<div class="dropdown-container">
		<a href="#awardstandardization">1 Award Standardization</a>
		<a href="#monarch">2 Monarch</a>
		<a href="#regent">3 Regent</a>
		<a href="#primeminister">4 Prime Minister</a>
		<a href="#champion">5 Champion</a>
		<a href="#guildmasterofreeves">6 Guildmaster of Reeves</a>
		<a href="#reeves">7 Reeves</a>
		<a href="#monarchsguard">8 Monarch's Guard</a>
		<a href="#classguildmasters">9 Class Guildmasters</a>
		<a href="#artsandscienceguildmasters">10 Arts and Science Guildmasters</a>
		<a href="#althing">11 Althing</a>
			<div class="dropdown"><a href="#honorsandawards">12 Honors and Awards</a></div>
				<div class="dropdown-container">
				<a href="#renouncingawardsandtitles">12.1 Renouncing Awards and Titles</a>
				<a href="#knighthood">12.3 Knighthood</a>
				<a href="#orderoftheflame">12.4 Order of the Flame</a>
				<a href="#orderofthegriffin">12.5 Order of the Griffin</a>
				<a href="#orderofthehydra">12.6 Order of the Hydra</a>
				<a href="#orderofthejovious">12.7 Order of the Jovious</a>
				<a href="#orderofthemask">12.8 Order of the Mask</a>
				<a href="#orderofwalkerinthemiddle">12.9 Order of Walker in the Middle</a>
				<a href="#orderofthewarrior">12.10 Order of the Warrior</a>
				<a href="#orderofthezodiac">12.11 Order of the Zodiac</a>
				<a href="#titlesofnobility">12.12 Titles of Nobility</a>
				</div>
		<a href="#orderofprecedence">13 Order of Precedence</a>
			<div class="dropdown"><a href="#monthofthecrown">14 Month of the Crown</a></div>
				<div class="dropdown-container">
				<a href="#warmastertournament">14.3 Warmaster Tournament</a>
				<a href="#guildmasterelections">14.4 Guildmaster Elections</a>
				<a href="#weaponmastertournament">14.5 Weaponmaster Tournament</a>
				<a href="#coronationfeast">14.6 Coronation Feast</a>
				</div>
			<div class="dropdown"><a href="#holdings">15 Holdings</a></div>
				<div class="dropdown-container">
				<a href="#holder">15.12 Holder</a>
				<a href="#consort">15.13 Consort</a>
				<a href="#chancellor">15.14 Chancellor</a>
				<a href="#guardian">15.15 Guardian</a>
				<a href="#althings">15.16 Althings</a>
				<a href="#monthofthecrown2">15.17 Month of the Crown</a>
				<a href="#suspensionfromplayatholdinglevel">15.18 Suspension From Play At Holding Level</a>
				</div>
			<a href="#principalities">16 Principalities</a>
			<div class="dropdown"><a href="#miscellaneous">17 Miscellaneous</a></div>
				<div class="dropdown-container">
				<a href="#bonuscredits">17.1 Bonus Credits</a>
				</div>		
		</div>
<!--bylaws sidebar-->
<div class="dropdown"><a href="#bylaws">Bylaws</a></div>
		<div class="dropdown-container">
			<div class="dropdown"><a href="#officers">1 Officers</a></div>
				<div class="dropdown-container">
				<a href="#boardofdirectors">1.3 Board of Directors</a>
				<a href="#operationsofficer">1.3.1 Operation's Officer</a>
				<a href="#financialofficer">1.3.2 Financial Officer</a>
				<a href="#othermembersoftheboardofdirectors">1.3.3 Other Members of the Board of Directors</a>
				<a href="#president">1.3.3.3 President</a>
				<a href="#secretary">1.3.3.4 Secretary</a>
				<a href="#treasurer">1.3.3.5 Treasurer</a>
				<a href="#non-votingalternativemembers">1.3.3.6 Non-voting/Alternative Members</a>
				<a href="#assistantoperationsofficer">1.4 Assistant Operations Officer</a>
				<a href="#adjudicationchief">1.5 Adjudication Chief</a>
				<a href="#quartermaster">1.7 Quartermaster</a>
				</div>
		<a href="#membership">2 Membership</a>
		<a href="#elections">3 Elections</a>
			<div class="dropdown"><a href="#meetings">4 Meetings</a></div>
				<div class="dropdown-container">
					<a href="#boardofdirectorsmeetings">4.1 Board of Directors Meetings</a>
					<a href="#generalmembershipmeetings">4.2 General Membership Meetings</a>
				</div>
		<a href="#subsidiarygroups">5 Subsidiary Groups</a>
		<a href="#subsidiarygroupsconfederations">6 Subsidiary Group Confederations</a>
		<a href="#independentsubsidiarygroups">7 Independent Subsidiary Groups</a>
		<a href="#dissolution">8 Dissolution</a>
		</div>
<!--Policies Sidebar-->
<div class="dropdown"><a href="#policies">Policies</a></div>
	 <div class="dropdown-container">
		<div class="dropdown"><a href="#coreofficers">1 Core Officers</a></div>
			<div class="dropdown-container">
			<a href="#poloperationsofficer">1.1 Operations Officer</a>
			<a href="#polassistantoperationsofficer">1.2 Assistant Operations Officer</a>
			<a href="#polfinancialofficer">1.3 Financial Officer</a>
			<a href="polboardofdirectors">1.5 Board of Directors</a>
			</div>
		<div class="dropdown"><a href="#additionalofficers">2 Additional Officers</a></div>
			<div class="dropdown-container">
			<a href="#polsafetyofficer">2.1 Safety Officer</a>
			<a href="#poladjudicationchief">2.2 Adjudication Chief</a>
			<a href="#polquartermaster">2.3 Quartermaster</a>
			</div>
		<a href="#polls">3 Polls</a>
		<a href="#expenditures">4 Expenditures</a>
		<a href="#referees">5 Referees</a>
		<a href="#rulesrepresentative">6 Rules Representative</a>
		<a href="#membership">7 Membership</a>
		<a href="#polgeneralmembershipmeetings">8 General Membership Meetings</a>
		<div class="dropdown"><a href="#electioncycle">9 Election Cycle</a></div>
			<div class="dropdown-container">
			<a href="#crownqualifications">9.1 Crown Qualifications</a>
			<a href="#championstournament">9.2 Champion's Tournament</a>
			</div>
		<a href="#polsubsidiarygroups">10 Subsidiary Groups</a>
		<div class="dropdown"><a href="#events">11 Events</a></div>
			<div class="dropdown-container">
			<a href="#officialsponsoredannualevents">11.4 Official Sponsored Annual Events</a>
			<a href="#pacwar">11.5 PacWar</a>
			<a href="#winterbash">11.6 Winterbash</a>
			</div>
		<div class="dropdown"><a href="#polmiscellaneous">12 Miscellaneous</a></div>
			<div class="dropdown-container">
			<a href="#infractionsheet">12.1 Infraction Sheet</a>
			</div>
	 </div>
<!--sidebar contents End-->		
</div>

<script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}
</script>

 <div class="content">
  <div class="handbooktitle">
	<h1 class="content"><a id="handbook">The Blackspire Handbook</h1></a>
		<br>
	<h2 class="handbook">A Compiled Version of the Corpora of the Kingdom of Blackspire</h2>
	<h3 class="handbook">Where the Bloody Skeleton's Rise Up out of the Ground to Kick Your Ass!</h3>
	<h4 class="handbook">Based on Coropora Documents from February, 25 2020</h4>
	<p class="handbook">(Disclaimer: This is not the official Kingdom Corpora Document, merely a compilation intended to improve ease
	of use and practicality of the documents)</p>

</div>
<!--This section contains the content for the Constitution-->
 <div class="handbook">
 	
 		<a id="constitution"><h1 class="content">Constitution</h1></a>
 		<p>(A rules supplement for the Amtgard LARP as played by The Kingdom of Blackspire.)</p>
		<br>
		<a id="awardstandardization"><h3>1 Awards Standardization</h3></a>
			<p>1.1 The kingdom is bound by all agreements ratified by the Amtgard Circle of Monarchs,
			including the interkingdom Awards Standardization Agreement which can be found
			among the Bylaws and Rulings of the Circle of Monarchs and is listed for reference in
			the current version of the Amtgard Rules of Play. </p>
			<p>1.2 As this agreement will be referenced repeatedly in this document it will be referred to
			simply as "Awards Standardization" for concision.</p>
		<a id="monarch"><h3>2 Monarch</h3></a>
		<p>2.1 The kingdom's Operations Officer shall be known in-game as its Monarch</p>
		<p>2.2 Only those who qualify at Crown Qualifications may try for Monarch.</p>
		<p>2.3 May award the following:</p>
		<p>2.3.1 Titles of Nobility (at the Monarch's discretion)</p>
		<p>2.3.2 Non-noble Titles (at the Monarch's discretion)</p>
		<p>2.3.3 Peerage (per Awards Standardization)</p>
		<p>2.3.4 The following Orders (per Awards Standardization):</p>
		<p>2.3.4.1 Dragon</p>
		<p>2.3.4.2 Flame</p>
		<p>2.3.4.3 Garber</p>
		<p>2.3.4.4 Lion</p>
		<p>2.3.4.5 Owl</p>
		<p>2.3.4.6 Rose</p>
		<p>2.3.4.7 Smith</p>
		<p>2.3.4.8 Warrior</p>
		<p>2.3.5 The following Orders (at the Monarch's discretion):</p>
		<p>2.3.5.1 Griffon</p>
		<p>2.3.5.2 Hydra</p>
		<p>2.3.5.3 Jovious</p>
		<p>2.3.5.4 Mask</p>
		<p>2.3.5.5 Walker of the Middle</p>
		<p>2.3.5.6 Zodiac</p>
		<p>2.3.6 The following Titles of Masterhood (per Awards Standardization):</p>
		<p>2.3.6.1 Master Dragon</p>
		<p>2.3.6.2 Master Garber</p>
		<p>2.3.6.3 Master Lion</p>
		<p>2.3.6.4 Master Owl</p>
		<p>2.3.6.5 Master Rose</p>
		<p>2.3.6.6 Master Smith</p>
		<p>2.3.6.7 Master Warrior (also known as Warlord)</p>
		<p>2.3.6.8 Master Hydra (to members holding 10 Orders of the Hydra)</p>
		<p>2.3.6.9 Master Reeve (to members with 12 or more credits as Reeve)</p>
		<p>2.3.7 Titles of Paragon in a specific Class (at the Monarch's discretion)</p>
		<p>2.4 May create new honors, awards and titles that do not conflict/compete with those listed in
		this document or the Awards Standardization.</p>
		<p>2.5 Titles and honors may never be awarded to members of another kingdom without that
		kingdom's Monarch's permission.</p>
		<p>2.6 May become eligible to receive these titles at the end of their term, if it was served with
		excellence:</p>
		<p>2.6.1 Knight of the Crown (per Awards Standardization)</p>
		<p>2.6.2 Duke/Duchess (or Grand Duke/Grand Duchess for serving two or more terms as
		Monarch)</p>
		<a id="regent"><h3>3 Regent</h3></a>
		<p>3.1 The kingdom's Assistant Operations Officer shall be known in-game as its Regent.</p>
		<p>3.2 Only those who qualify at Crown Qualifications may try for Regent.</p>
		<p>3.3 May bestow the following Orders (per Awards Standardization):</p>
		<p>3.3.1 Dragon</p>
		<p>3.3.2 Garber</p>
		<p>3.3.3 Lion</p>
		<p>3.3.4 Owl</p>
		<p>3.3.5 Rose</p>
		<p>3.3.6 Smith</p>
		<p>3.4 May create new honors and awards in keeping with their duties that do not conflict/compete
		with those listed in this document or the Awards Standardization.</p>
		<p>3.5 At the end of their term, if it was served with excellence, may receive the title of
		Count/Countess.</p>
		<a id="primeminister"><h3>4 Prime Minister</h3></a>
			<p>4.1 The kingdom's Treasurer shall be known in-game as its Prime Minister.</p>
			<p>4.2 At the end of their term, if it was served with excellence, may receive the title of
			Baron/Baroness.</p>
		<a id="champion"><h3>5 Champion</h3></a>
			<p>5.1 The kingdom's Safety Officer shall be known in-game as its Champion.</p>
			<p>5.2 Only those who qualify at Crown Qualifications may try for Champion.</p>
			<p>5.3 The Champion shall be the defender of the crown.</p>
			<p>5.4 At the end of their term, if it was served with excellence, may receive the title of Defender.</p>
		<a id="guildmasterofreeves"><h3>6 Guildmaster of Reeves</h3></a>
			<p>6.1 The kingdom's Adjudication Chief shall be known in-game as its Guildmaster of Reeves.</p>
		<a id="reeves"><h3>7 Reeves</h3></a>
			<p>7.1 Referees shall be known in-game as Reeves.</p>
		<a id="monarchsguard"><h3>8 Monarch's Guard</h3></a>
			<p>8.1 Appointment and dismissal are at the Monarch's discretion.</p>
			<p>8.2 Shall ensure that the Monarch and Regent are properly escorted.</p>
			<p>8.3 Shall be responsible for in-game security at kingdom events (i.e., their security function is a
			roleplay aspect).</p>
		<a id="classguildmasters"><h3>9 Class Guildmasters</h3></a>
			<p>9.1 Must keep the members of their class following the proper rules for that class.</p>
			<p>9.2 Shall help new members of the class learn the rules for their class.</p>
			<p>9.3 Shall encourage garb, equipment and personas applicable to their class.</p>
			<p>9.4 Shall monitor their classes in play and present ideas for relevant rules clarification and rules
			revisions to the Monarch and Althing.</p>
			<p>9.5 Class guildmasters may be removed from office by a 2/3 vote of all members of a class and
			approval of the Monarch and Prime Minister.</p>
		<a id="artsandscienceguildmasters"><h3>10 Arts and Science Guildmasters</h3></a>
			<p>10.1 If popular interest permits, a Guildmaster may be elected to head an arts and sciences
			guild, at the same time as the Monarch and Regent are elected.</p>
			<p>10.2 Such Guildmasters are responsible for encouraging the interest, growth and application of
			their particular discipline.</p>
			<p>10.3 Such Guildmasters may adopt additional duties as appropriate to their discipline, for
			example a Guildmaster of Garbers may take it upon themselves to assess garb and
			present Order of the Garber recommendations to the Regent, or a Guildmaster of
			Heraldry may take it upon themself to maintain a registry of the heraldry of the
			kingdom's members.</p>
		<a id="althing"><h3>11 Althing</h3></a>
			<p>11.1 General membership meetings shall be known in-game as Althings.</p>
		<a id="honorsandawards"><h3>12 Honors and Awards</h3></a>
			<a id="renouncingawardsandtitles"><h4>12.1 Renouncing Awards and Titles</h4></a>
				<p>12.1.1 Any member may voluntarily renounce any title or award given to them by submitting a
				written request to do so to the Prime Minister. Any title or award renounced in such a
				fashion shall be immediately removed from their record, and this decision cannot be
				rescinded.</p>
				<p>12.2 Stripping Awards and Titles</p>
				<p>12.2.1 Any award or title may be rescinded by a 3/4 majority of vote of active members at an
				Althing.</p>
				<p>12.2.2 If the person whose title to be removed no longer resides within the kingdom, agreement
				of their local kingdom monarchy is also required.</p>
			<a id="knighthood"><h4>12.3 Knighthood</h4></a>
				<p>12.3.1 In addition to the criteria set by Awards Standardization, Monarchs are very strongly
				suggested to acquire the approval of the current circle of Knights before awarding a new
				knighthood.</p>
				<p>12.3.2 A Knight may choose to take a Squire.</p>
				<p>12.3.2.1 The garb of a Squire is a red belt.</p>
				<p>12.3.2.2 It is suggested that a Knight should never have more Squires than separate orders of
				Knighthood that they have achieved.</p>
			<a id="orderoftheflame"><h4>12.4 Order of the Flame</h4></a>
				<p>12.4.1 Is awarded to a group of people (fighting company, household, etc.) for outstanding
				contributions to Amtgard.</p>
				<p>12.4.2 Only one Order of the Flame may be given in each Monarch's reign.</p>
			<a id="orderofthegriffin"><h4>12.5 Order of the Giffin</h4></a>
				<p>12.5.1 Is awarded by for courage, chivalry and honor on the battlefield.</p>
				<p>12.5.2 Is a Ladder Award progressing through ten levels of escalating accomplishment as per
				the Ladder Awards described in Awards Standardization.</p>
				<p>12.5.3 Does not have a corresponding Master title and cannot be used as a qualification for
				Knighthood.</p>
			<a id="orderofthehydra"><h4>12.6 Order of the Hydra</h4></a>
				<p>12.6.1 Is awarded for entering enough Crown Qualification events to qualify.</p>
				<p>12.6.2 Each person may only receive one Hydra per Crown Qualification.</p>
			<a id="orderofthejovious"><h4>12.7 Order of the Jovious</h4></a>
				<p>12.7.1 Is awarded for outstanding attitude.</p>
				<p>12.7.2 Only one Order of the Jovious may be given in each Monarch's reign.</p>
			<a id="orderofthemask"><h4>12.8 Order of the Mask</h4></a>
				<p>12.8.1 Is awarded for outstanding portrayal of a persona.</p>
				<p>12.8.2 Only one Order of the Mask may be given in each Monarch's reign.</p>
			<a id="orderofwalkerinthemiddle"><h4>12.9 Order of Walker in the Middle</h4></a>
				<p>12.9.1 Is awarded for exemplification of the ideals and conduct of Reeves.</p>
				<p>12.9.2 A person may never receive more than one Order of Walker in the Middle.</p>
			<a id="orderofthewarrior"><h4>12.10 Order of the Warrior</h4></a>
				<p>12.10.1 Is detailed in the Awards Standardization.</p>
				<p>12.10.2 The number of Orders of the Warrior a person has earned may be signified by a belt
				favor according to the following scheme:</p>
					<ul>
						<li>1: Green Snake.</li>
						<li>2: Blue Boar.</li>
						<li>3: Red Mongoose.</li>
						<li>4: Brown Bear.</li>
						<li>5: Rust Hawk.</li>
						<li>6: Gray Wolf.</li>
						<li>7: Orange Tiger.</li>
						<li>8: Black Panther.</li>
						<li>9: Purple Dragon.</li>
						<li>10 or more: Yellow Phoenix with a red border.</li>
					</ul>
			<a id="orderofthezodiac"><h4>12.11 Order of the Zodiac</h4></a>
				<p>12.11.1 Is awarded for outstanding contributions in any one month.</p>
				<p>12.11.2 Only one Order of the Zodiac may be given each month.</p>
			<a id="titlesofnobility"><h4>12.12 Titles of Nobility</h4></a>
				<p class="test123">12.12.1 Grand Duke/Grand Duchess</p>
				<p>12.12.1.1 Recommended title for serving two terms with excellence as Monarch.</p>
				<p>12.12.2 Archduke/Archduchess</p>
				<p>12.12.2.1 Recommended title for serving with excellence one term each as Monarch and Duke
				(Holder of a Duchy), or one term each as Monarch and pro-tem Monarch.</p>
				<p>12.12.3 Duke/Duchess</p>
				<p>12.12.3.1 Recommended title for serving a term with excellence as Monarch.</p>
				<p>12.12.3.2 Recipient may substitute an equivalent title name for this rank such as Doge, Dux,
				Herzog, Duc, Duque, Duca, Pfalzgraf, Shogun, Bretwalda, or Chiangchun.</p>
				<p>12.12.3.3 Although the Holder of a Duchy is referred to as a Duke and enjoys the same position
				in the Order of Precedence, the title and the position remain distinct statuses.</p>
				<p>12.12.4 Count/Countess</p>
				<p>12.12.4.1 Recommended title for serving a term with excellence as Regent.</p>
				<p>12.12.4.2 Recipient may substitute an equivalent title name for this rank such as Earl, Comes,
				Comite, Graf, Jarl, Conde, Comte, Conte, Graaf, Orkhan, Shireman, Dey, Kaliph,
				Khidiw, Cuauhtlahtoque, or Contessa.</p>
				<p>12.12.5 Marquis/Marquise</p>
				<p>12.12.5.1 Recommended title for serving with excellence one term each as Monarch, Regent,
				and Champion.</p>
				<p>12.12.5.2 Recipient may substitute an equivalent title name for this rank such as Markgraf,
				Marchioness, Margrave, Mark, Markis, Margraf, Marques, Marchese, Margravine, or
				Marquee.</p>
				<p>12.12.6 Viscount/Viscountess</p>
				<p>12.12.6.1 Recommended title for serving a term with excellence as Champion in addition to
				winning the kingdom Weaponmaster tourney.</p>
				<p>12.12.6.2 Recipient may substitute an equivalent title name for this rank such as Vicomte,
				Viconte, Visconte, Vizconde, Visconde, Walgraf or Pasha.</p>
				<p>12.12.7 Baron/Baroness</p>
				<p>12.12.7.1 Recommended title for serving a term with excellence as Prime Minister.</p>
				<p>12.12.7.2 Recipient may substitute an equivalent title name for this rank such as Daimyo, Emir,
				Thane, Khan, Barun, Barao or Barone.</p>
				<p>12.12.7.3 Although the Holder of a Barony is referred to as a Baron and enjoys the same
				position in the Order of Precedence, the title and the position remain distinct statuses.</p>
				<p>12.12.8 Baronet</p>
				<p>12.12.8.1 Recommended title for serving with excellence as pro-tem Monarch, Regent, Prime
				Minister or Champion.</p>
				<p>12.12.8.2 Recipient may substitute an equivalent title name for this rank such as Nawab,
				Freiherr, Lesser Thane, Sheik, Seignur, or Begum.</p>
				<p>12.12.9 Lord/Lady</p>
				<p>12.12.9.1 Recommended title for excellent service outside of office.</p>
				<p>12.12.9.2 Recipient may substitute an equivalent title name for this rank such as Chieftain, Don,
				Laird, Halfweard, Loverd, Laferd, Pan, Kyrios, Dom, Sherif, Sayid, Agah or Rabban.</p>
				<p>12.12.10 Defender</p>
				<p>12.12.10.1 Recommended title for serving a term with excellence as Champion.</p>
				<p>12.13 Non-noble Titles</p>
				<p>12.13.1 Master</p>
				<p>12.13.1.1 Recommended title for serving a term with excellence in Holding office (see below).</p>
				<p class="test123">12.13.2 Esquire</p>
				<p>12.13.2.1 Recommended title for serving a term with excellence in Holding office (see below).</p>
		<a id="orderofprecedence"><h3>13 Order of Precedence</h3></a>
			<p>13.1 Monarch</p>
			<p>13.2 Prime Minister</p>
			<p>13.3 Regent</p>
			<p>13.4 Grand Duke</p>
			<p>13.5 Archduke</p>
			<p>13.6 Champion</p>
			<p>13.7 Duke (both the title and the Holder position in a Duchy enjoy this rank)</p>
			<p>13.8 Count</p>
			<p>13.9 Marquis</p>
			<p>13.10 Viscount</p>
			<p>13.11 Baron (both the title and Holder position in a Barony enjoy this rank)</p>
			<p>13.12 Knight</p>
			<p>13.13 Baronet</p>
			<p>13.14 Warlord</p>
			<p>13.15 Lord</p>
			<p>13.16 Master (only the specific title "Master" confers this rank)</p>
			<p>13.17 Esquire</p>
			<p>13.18 Guildmaster of Reeves</p>
			<p>13.19 Captain of the Monarch's Guard</p>
			<p>13.20 Weaponmaster</p>
			<p>13.21 Warmaster</p>
			<p>13.22 Guildmaster of an Arts and Sciences Guild</p>
			<p>13.23 Guildmaster of a Class Guild</p>
			<p>13.24 Any court position appointed directly by the Monarch or Regent</p>
			<p>13.25 Master Rose or Master Smith (equivalent rank)</p>
			<p>13.26 Head of a fighting company</p>
			<p>13.27 Head of a household</p>
			<p>13.28 Squire</p>
			<p>13.29 Reeve</p>
		<a id="monthofthecrown"><h3>14 Month of the Crown</h3></a>
			<p class="test123">14.1 The 30 days prior to Coronation is the Month of the Crown.</p>
			<p>14.2 Crown Qualifications</p>
			<p>14.2.1 The winner of the cultural events at Crown Qualifications shall hold the title of kingdom
			Arts and Sciences Champion for the next six months.</p>
			<a id="warmastertournament"><h4>14.3 Warmaster Tournament</h4></a>
				<p>14.3.1 The Warmaster Tournament will be held the same day as the Crown Qualifications
				event.</p>
				<p>14.3.2 Those running kingdom office are strongly recommended to participate in both the
				tournament and battlegame portions of the Warmaster event.</p>
				<p>14.3.3 The running of the Warmaster Tournament will be the responsibility of the current
				Champion.</p>
				<p>14.3.4 The Warmaster will be a multi-bracketed, single-elimination tournament and include a
				full-class battlegame. </p>
				<p>14.3.5 The tournament brackets will be:</p>
				<p>14.3.5.1 Single short weapon.</p>
				<p>14.3.5.2 Double short weapon.</p>
				<p>14.3.5.3 Shield and weapon (any melee weapon).</p>
				<p>14.3.5.4 Great weapon.</p>
				<p>14.3.5.5 Open (contestant's choice).</p>
				<p>14.3.6 The first and second place contests from these brackets overall will then act as captains
				for a full-class battlegame of the Champion's choice.</p>
				<p>14.3.6.1 The Champion is encouraged to select from the standard battlegames described in the
				current Rules of Play so as to avoid setting up a battlegame that favors one conestant
				over another.</p>
				<p>14.3.7 The captain of the winning team will be awarded the title of Warmaster for the next six months.</p>
			<a id="guildmasterelections"><h4>14.4 Guildmaster Elections</h4></a>
				<p>14.4.1 Guildmaster Elections are to be held on the same day as the elections for Monarch and
				Regent.</p>
				<p>14.4.2 Each class guild and the Reeve's Guild will each vote for their Guildmaster at these
				elections.</p>
				<p>14.4.3 One must have participated in a class in the past six months in order to vote in the
				election for that class's Guildmaster.</p>
				<p>14.4.4 If elections are held for any Arts and Sciences Guildmaster, they are to be held at this
				time as well, and are open to be voted on by any active dues paid member of the
				kingdom.</p>
			<a id="weaponmastertournament"><h4>14.5 Weaponmaster Tournament</h4></a>
				<p>14.5.1 Shall be held on the same day as elections for Monarch and Regent, or within the next
				two weeks of that date.</p>
				<p>14.5.2 Shall be run by the Reeves Guild.</p>
				<p>14.5.3 This is a passage of arms in several different weapon classes.</p>
				<p>14.5.4 The Weaponmaster tournament will be a multi-bracketed, single-elimination tournament.</p>
				<p>14.5.5 The brackets must include:</p>
				<p>14.5.5.1 Single one-handed weapon (any melee weapon).</p>
				<p>14.5.5.2 Double weapon (any melee weapon).</p>
				<p>14.5.5.3 Shield and weapon (any melee weapon).</p>
				<p>14.5.5.4 Great weapon.</p>
				<p>14.5.5.5 Open (contestant's choice).</p>
				<p>14.5.6 At the Guildmaster of Reeves' discretion, the "Single one-handed weapon bracket" may
				be replaced by two separate "Single short weapon" and "Single long weapon" brackets.
				If this is not done, long weapons shall be allowed in the bracket.</p>
				<p>14.5.7 Other brackets may be included at the discretion of the Guildmaster of Reeves.
				Possibilities include:</p>
				<p>14.5.7.1 Bow.</p>
				<p>14.5.7.2 Dagger (single or double).</p>
				<p>14.5.7.3 Flail.</p>
				<p>14.5.7.4 Thrown weapon.</p>
				<p>14.5.8 Specific rules and bracket selection for the Weaponmaster Tourney must be posted at
				least two weeks prior to the date set forth for the Tournament.</p>
				<p>14.5.9 The winner will hold the title of Weaponmaster until the date of the next Weaponmaster
				Tournament.</p>
			<a id="coronationfeast"><h4>14.6 Coronation Feast</h4></a>
				<p>14.6.1 The coronation feast is the responsibility of the outgoing Regent.</p>
		<a id="holdings"><h3>15 Holdings</h3></a>
			<p>15.1 Subsidiary groups shall be known in-game as Holdings.</p>
			<p>15.2 Holdings that are members of subsidiary group confederations are not subject to this
			section but instead should be governed by their subsidiary group confederation corpora
			or local corpora.</p>
			<p>15.3 A member of the kingdom may only be a member of one Holding at a time.</p>
			<p>15.4 Holdings are classified as Shires, Baronies or Duchies according to their attendance record
			and will be generally referred to by those titles.</p>
			<p>15.5 Attendance will be measured in the form of number of unique persons signing in as having
			attended a Holding function at any point within a given month.</p>
			<p>15.6 Unique sign-ins per month will be averaged over a year's time to give an average unique
			sign-ins per month figure that will be used to determine whether a holding qualifies for
			a given status.</p>
			<p>15.7 The attendance required to qualify for each Holding status is as follows:</p>
			<p>15.7.1 Shire: Any.</p>
			<p>15.7.2 Barony: An average of at least 20 unique sign-ins per month.</p>
			<p>15.7.3 Duchy: An average of at least 40 unique sign-ins per month.</p>
			<p>15.8 In order for a holding to ascend to a higher status, the following requirements must all be
			met:</p>
			<p>15.8.1 The attendance standard must be met for the status sought, taken as an average over the
			past year.</p>
			<p>15.8.2 At least one year must have passed since the approval of the Holding's contract with the
			AI BOD in order for it to ascend to Barony status.</p>
			<p>15.8.3 At least three years must have passed since the approval of the Holding's contract with
			the AI BOD in order for it to ascend to Duchy status.</p>
			<p>15.8.4 The Monarch must approve the change in Holding status.</p>
			<p>15.9 A holding will be demoted to a lower status if all of the following requirements are met:</p>
			<p>15.9.1 The attendance standard, taken as an average over the past two years, has not been met.</p>
			<p>15.9.2 The Monarch approves the change in Holding status.</p>
			<p>15.10 The maximum level of award that a Holding officer may bestow is determined by the
			status of their Holding as follows:</p>
			<p>15.10.1 Shire: may only bestow 1st and 2nd orders.</p>
			<p>15.10.2 Barony: may bestow awards up to the 5th order.</p>
			<p>15.10.3 Duchy: may bestow awards up the 8th order.</p>
			<p>15.11 Any Holding officer may be impeached by a petition signed by at least 20% of all active
			dues paid members of the Holding. An officer thus impeached may then be removed
			from office by a 2/3 vote at a Holding Althing.</p>
			<a id="holder"><h4>15.12 Holder</h4></a>
				<p>15.12.1 The Holder is a Holding-level office serving a role similar to the Monarch.</p>
				<p>15.12.2 No powers granted to the Monarch in this document should be assumed to apply
				equally to a Holder; only those powers specifically granted to Holders are granted to
				them.</p>
				<p>15.12.3 All references in the Rules of Play to gameplay functions fulfilled by the Monarch
				apply equally to the Holder regarding Holding level gameplay.</p>
				<p>15.12.4 Should not hold the office for more than two consecutive terms. 15.12.4.1 Exceptions
				may be made when no replacement candidate is available.</p>
				<p>15.12.5 The specific in-game title for a Holder varies by the status of their Holding:</p>
				<p>15.12.5.1 Shire: Referred to as Sheriff.</p>
				<p>15.12.5.2 Barony: Referred to as Baron (or may substitute any alternative title listed in
				12.12.7.2).</p>
				<p>15.12.5.3 Duchy: Referred to as Duke (or may substitute any alternative title listed in
				12.12.3.2).</p>
				<p>15.12.6 May award the following Orders (as per Awards Standardization):</p>
				<p>15.12.6.1 Dragon</p>
				<p>15.12.6.2 Flame</p>
				<p>15.12.6.3 Garber</p>
				<p>15.12.6.4 Lion</p>
				<p>15.12.6.5 Owl</p>
				<p>15.12.6.6 Rose</p>
				<p>15.12.6.7 Smith</p>
				<p>15.12.6.8 Warrior</p>
				<p>15.12.7 May award the following Orders (per the Holder's discretion):</p>
				<p>15.12.7.1 Griffon</p>
				<p>15.12.8 May create new honors, awards and titles that do not conflict/compete with those listed in this document or the Awards Standardization.</p>
				<p>15.12.9 Has the authority to expend up to 10% of the Holding treasury per month. Any further
				expenditures require authorization by a Holding Althing.</p>
				<p>15.12.10 At the end of their term, if it was served with excellence, may receive one of the
				following titles, depending on the status of their Holding:</p>
				<p>15.12.10.1 Shire: recommended to be given the title of Lord.</p>
				<p>15.12.10.2 Barony: recommended to be given the title of Baronet.</p>
				<p>15.12.10.3 Duchy: recommended to be given the title of Baron.</p>
			<a id="consort"><h4>15.13 Consort</h4></a>
				<p>15.13.1 The Consort is a Holding-level office serving a role similar to the Regent.</p>
				<p>15.13.2 No powers granted to the Regent in this document should be assumed to apply equally
				to a Consort; only those powers specially granted to Consorts are granted to them.</p>
				<p>15.13.3 May award the following Orders (as per Awards Standardization):</p>
				<p>15.13.3.1 Dragon</p>
				<p>15.13.3.2 Garber</p>
				<p>15.13.3.3 Lion</p>
				<p>15.13.3.4 Owl</p>
				<p>15.13.3.5 Rose</p>
				<p>15.13.3.6 Smith</p>
				<p>15.13.4 May create new honors, awards and titles that do not conflict/compete with those listed
				in this document or the Awards Standardization.</p>
				<p>15.13.5 At the end of their term, if it was served with excellence, may receive one of the
				following titles, depending on the status of their Holding:</p>
				<p>15.13.5.1 Shire: recommended to be given the title of Master.</p>
				<p>15.13.5.2 Barony: recommended to be given the title of Lord.</p>
				<p>15.13.5.3 Duchy: recommended to be given the title of Baronet.</p>
			<a id="chancellor"><h4>15.14 Chancellor</h4></a>
				<p>15.14.1 The Chancellor is a Holding-level office serving a role similar to the Prime Minister.</p>
				<p>15.14.2 No powers granted to the Prime Minister in this document should be assumed to apply
				equally to a Chancellor; only those powers specially granted to Chancellors are granted
				to them.</p>
				<p>15.14.3 Should not hold the office for more than two consecutive terms. 15.14.3.1 Exceptions
				may be made when no replacement candidate is available.</p>
				<p>15.14.4 Is responsible for the collection of all fees and dues, including dues.</p>
				<p>15.14.5 Should maintain accurate records of the Holding treasury.</p>
				<p>15.14.5.1 Will provide a financial update, once a calendar year, to the Treasurer.</p>
				<p>15.14.5.2 Will have at a minimum a financial ledger, receipt book, and lock box.</p>
				<p>15.14.6 Should maintain accurate records of all Holding income and expenditures.</p>
				<p>15.14.7 Should keep minutes of Holding level Althings.</p>
				<p>15.14.8 Will keep attendance records of all Holding functions.</p>
				<p>15.14.9 Is responsible for making these attendance records accessible to the Prime Minister.</p>
				<p>15.14.10 Has the authority to expend up to 10% of the Holding treasury per month. Any further
				expenditures require authorization by a Holding Althing.</p>
				<p>15.14.11 At the end of their term, if it was served with excellence, may receive one of the
				following titles, depending on the status of their Holding:</p>
				<p>15.14.11.1 Shire: recommended to be given the title of Esquire.</p>
				<p>15.14.11.2 Barony: recommended to be given the title of Master.</p>
				<p>15.14.11.3 Duchy: recommended to be given the title of Lord.</p>
			<a id="guardian"><h4>15.15 Guardian</h4></a>
				<p>15.15.1 The Guardian is a Holding-level office serving a role similar to the Champion.</p>
				<p>15.15.2 No powers granted to the Champion in this corpora should be assumed to apply equally
				to a Guardian; only those powers specifically granted to them.</p>
				<p>15.15.3 All references in the Rules of Play to gameplay functions fulfilled by the Champion
				apply equally to the Guardian regarding Holding level gameplay.</p>
				<p>15.15.4 Shall maintain a lost and found for the Holding.</p>
				<p>15.15.5 Shall check all equipment for safety and legality.</p>
				<p>15.15.6 Will organize games as necessary in the absence of previously scheduled games.</p>
				<p>15.15.7 At the end of their term, if it was served with excellence, may receive one of the
				following titles, depending on the status of their Holding:</p>
				<p>15.15.7.1 Shire: recommended to be given the title of Esquire.</p>
				<p>15.15.7.2 Barony: recommended to be given the title of Esquire.</p>
				<p>15.15.7.3 Duchy: recommended to be given the title of Master.</p>
			<a id="althings"><h4>15.16 Althings</h4></a>
				<p>15.16.1 Holdings may hold their own Althings to decide their own policies.</p>
				<p>15.16.2 Voting at a Holding Althing is open only to active dues paid members of that Holding.</p>
				<p>15.16.3 Holdings are recommended to conduct their Althings in as similar a fashion to
				Kingdom Althings as possible.</p>
			<a id="monthofthecrown2"><h4>15.17 Month of the Crown</h4></a>
				<p>15.17.1 During Month of the Crown each Holding shall also hold elections for their Holder and
				Consort.</p>
				<p>15.17.2 Each Holding shall also hold elections for their Chancellor at the middle of each reign.</p>
				<p>15.17.3 Only active dues paid members of a Holding are eligible to participate in that Holding's
				elections or to run for Holding office.</p>
				<p>15.17.4 Only members aged 18 years or older are eligible for the offices of Holder, Consort and
				Chancellor.</p>
				<p>15.17.5 Holding elections shall be administered by the current Chancellor, with the exception
				of the Chancellor election, which shall be administered by the Holder.</p>
				<p>15.17.6 Holdings may hold Crown Qualification events and require candidates for holding
				office to enter or meet minimum requirements in them.</p>
				<p>15.17.6.1 If this is done, the Kingdom Crown Qualification procedure should be used as a
				model, but a lower number of entries required commensurate with the smaller size of
				the Holding is suggested.</p>
				<p>15.17.6.2 Holdings may hold their own versions of Warmaster and Weaponmaster tournaments
				but the winners of these events are not granted the title of Warmaster or Weaponmaster.</p>
			<a id="suspensionfromplayatholdinglevel"><h4>15.18 Susepnsion From Play at Holding Level</h4></a>
			<p>15.18.1 A Holder and Chancellor acting in agreement may issue a suspension from gameplay
			for any duration. </p>
			<p>15.18.2 Such suspensions will not be effective at Holdings other than the one at which they
			were issued, but will be effective for Kingdom level gameplay scheduled to occur at the
			Holding where they were issued.</p>
		<a id="principalities"><h3>16 Principalities</h3></a>
			<p>16.1 Subsidiary group confederations shall be known in-game as Principalities.</p>
			<p>16.2 Principalities are expected to maintain their own corpora, in preparation for their ascension
			to kingdom status.</p>
			<p>16.3 Principalities, may, according to the provisions of their own corpora, award the following
			Titles:</p>
			<p>16.3.1 Paragon in a specific Class</p>
			<p>16.3.2 Baron/Baroness</p>
			<p>16.3.3 Baronet</p>
			<p>16.3.4 Lord/Lady</p>
			<p>16.3.5 Master</p>
			<p>16.3.6 Esquire</p>
			<p>16.4 Principalities, may also, according to the provisions of their own
			corpora and subject to Awards Standardization, bestow up to 9th order 
			awards.</p>
		<a id="miscellaneous"><h3>17 Miscellaneous</h3></a>
		<a id="bonuscredits"><h4>17.1 Bonus Credits</h4></a>
			<p>17.1.1 Bonus credits will be given, in addition to the usual attendance credit as outlined in the
			rules of play, in the following circumstances:</p>
			<p>17.1.2 One (1) additional credit for attending a kingdom level event.</p>
<!--This section contains the content for Bylaws-->
<br>
<br>
 		<a id="bylaws"><h1 class="content">Bylaws</h1></a>
 		<p>(The bylaws our NPO is incorporated under. Theoretically these are legally binding.)</p>
 			<br>
 		<a id="officers"><h3>1 Officers</h3></a>
 			<p>1.1 All officers are subject to the attached indemnification agreement.</p>
 			<p>1.2 Any officer may be impeached by a petition signed by at least 20% of all active dues paid members of the group. An officer thus impeached may then be removed from office by a 2/3 vote at a group membership meeting.</p>
 				<a id="boardofdirectors"><h4>1.3 Board of Directors</h4></a>
 				<a id="operationsofficer"><h4>1.3.1 Operations Officer</h4></a>
 					<p>1.3.1.2 Is also the President of the Board of Directors.</p>
 					<p>1.3.1.3 Has the power to break ties on any vote.</p>
 					<p>1.3.1.4 In any case where this tie-breaking authority poses a clear conflict of interest issue, it will be ceded to the Treasurer.</p>
 					<p>1.3.1.5 Has the authority to expend up to 10% of the group treasury per month. May not be used for personal expenses, or outside the scope of Kingdom duties. Any further expenditures require authorization by a general membership meeting.</p>
 					<p>1.3.1.5.1 Has the authority to sign checks drawn against the group’s bank accounts for expenditures that are authorized by the bylaws or by a vote of the general membership.</p>
 					<p>1.3.1.6 Has the authority to sign contracts binding the group that have been approved by a majority vote of the Board of Directors.</p>
 					<p>1.3.1.7 May not hold the office for more than two consecutive terms. (Holding the office protem shall not count towards this limit.)</p>
 					<p>1.3.1.8 Shall relinquish the position if they miss more than two general membership meetings in a row or more than three general membership meetings total over course of their sixmonth term.</p>
 					<p>1.3.1.9 Shall relinquish the position if they miss more than one board of directors meeting during their six-month term. </p>
 					<p>1.3.1.10 If, for whatever reason, the position of Operations Officer is vacated, the Assistant Operations Officer becomes pro-tem Operations Officer until the next elections.</p>
 					<p>1.3.1.11 If, for whatever reason, the Assistant Operations Officer is unable, or ineligible, to assume the position of pro-tem Operations Officer, a new election must be held. A general membership meeting must be convened within one month of the date the office was vacated to set terms for an emergency election, except in situations where a regularly scheduled election would occur before this date. The Treasurer will oversee the formation of the general membership meeting as well as coordinate the emergency election.</p>
 					<p>1.3.1.12 Should the office of Operations Officer be vacated, with no viable Assistant Operations Officer successor, for less than one month before a scheduled election is to occur, a general membership meeting will be convened as needed to coordinate any business that arises until the scheduled election appoints a new Operations Officer.</p>
 				<a id="financialofficer"><h4>1.3.2 Financial Officer</h4></a>
 					<p>1.3.2.1 Is a member of the Board of Directors.</p>
 					<p>1.3.2.2 Is responsible for collection of all fees and duties.</p>
 					<p>1.3.2.3 Shall conduct all elections except for the election of Treasurer (which shall be conducted by the Operations Officer).</p>
 					<p>1.3.2.4 Has the authority to expend up to 10% of the group treasury per month. May not be used for personal expenses, or outside the scope of Kingdom duties. Any further expenditures require authorization by a general membership meeting.</p>
 					<p>1.3.2.5 Has the authority to sign checks drawn against the group’s bank accounts for expenditures that are authorized by the bylaws or by a vote of the general membership.</p>
 					<p>1.3.2.6 May not hold the office for more than two consecutive terms. (Holding the office protem shall not count towards this limit.)</p>
 					<p>1.3.2.7 Shall relinquish the position if they miss more than two general membership meetings in a row or more than three general membership meetings total over course of their sixmonth term.</p>
 					<p>1.3.2.8 Shall relinquish the position if they miss more than one board of directors meeting over course of their six-month term.
 					<p>1.3.2.9 If, for whatever reason, the office of Treasurer is vacated, an emergency election must be held within two weeks of the date the office was vacated.</p>
 				<a id="othermembersoftheboardofdirectors"><h4>1.3.3 Other members of the Board of Directors</h4></a>
 					<p>1.3.3.1 A minimum of four group members (maximum of ten) shall be chosen by open ballot to serve in this capacity.</p>
 					<p>1.3.3.2 Shall relinquish the position if they miss more than two board of directors meetings during their one year term.</p>
 				<a id="secretary"><h4>1.3.3.4 Sectretary</h4></a>
 					<p>1.3.3.4.1 Shall be chosen from the current membership of the Board of Directors by a vote by the Board of Directors.</p>
 					<p>1.3.3.4.2 Will be responsible for maintaining the mailing address of the group.</p>
 					<p>1.3.3.4.3 Shall list minutes of all Board of Directors meetings.</p>
 					<p>1.3.3.4.4 Shall check any changes to documents by the Treasurer and Financial Officer.</p>
 					<p>1.3.3.4.5 May not hold any elected kingdom office.</p>
 				<a id="treasurer"><h4>1.3.3.5 Treasurer</h4></a>
 					<p>1.3.3.5.1 Shall be chosen from the current membership of the Board of Directors by a vote of the Board of Directors.</p>
 					<p>1.3.3.5.2 Is responsible for collection of all non-game fees and duties.</p>
 					<p>1.3.3.5.3 Has the authority to sign checks drawn against the group's bank accounts for expenditures that are authorized by the bylaws or by a vote of the general membership.</p>
 					<p>1.3.3.5.4 May not hold any elected kingdom office.</p>
 				<a id="non-votingalternativemembers"><h4>1.3.3.6 Non-voting/Alternate Members</h4></a>
 					<p>1.3.3.6.1 Two seats shall be held by individuals who previously held the Kingdom Monarch and Kingdom Prime Minister positions. Duties and obligations are at the discretion of the BOD.</p>
 					<p>1.3.3.6.2 If a voting member is not present for a vote, an alternate member can take their place for voting purposes, as determined by simple plurality vote from the voting members present.</p>
 				<a id="assistantoperationsofficer"><h4>1.4 Assistant Operations Officer</h4></a>
 					<p>1.4.1 Is not a member of the Board of Directors.</p>
 					<p>1.4.2 Shall relinquish the position if they miss more than two general membership meetings in a row or more than three general membership meetings total.</p>
 					<p>1.4.3 Will become pro-tem Operations Officer should the office of Operations Officer for whatever reason be vacated.</p>
 					<p>1.4.4 If the Assistant Operations Officer assumes the position of pro-tem Operations Officer, with less than one month before a scheduled election, the position of Assistant Operations Officer will remain vacated until the next scheduled election, with the protem Operations Officer maintaining all Assistant Operations Officer duties.</p>
 					<p>1.4.5 If the Assistant Operations Officer assumes the position of pro-tem Operations Officer, with more than one month before a scheduled election, the pro-tem Operations Officer may appoint a successor to the Assistant Operations Officer position with approval of the general membership. (Current office holders are ineligible for appointment.)</p>
 				<a id="adjudicationchief"><h4>1.5 Adjudication Chief</h4></a>
 					<p>1.5.1 Is not a member of the Board of Directors.</p>
 					<p>1.5.2 May not also hold any of the following positions: Operations Officer, Assistant Operations Officer, Treasurer, Safety Officer.</p>
 					<p>1.5.3 May be dismissed by the joint agreement of the Operations Officer and Treasurer.</p>
 					<p>1.5.4 Shall relinquish the position if they miss more than two group functions in a row or more than three group functions total over course of their six-month term.</p>
 					<p>1.5.5 If, for whatever reason, the position of Adjudication Chief is vacated, the Operations Officer may appoint a replacement.</p>
 				<a id="quartermaster"><h4>1.7 Quartermaster</h4></a>
 					<p>1.7.1 Is not a member of the Board of Directors.</p>
 					<p>1.7.2 May be dismissed by the joint agreement of the Operations Officer and Treasurer.</p>
 					<p>1.7.3 If, for whatever reason, the position of Property Manager is vacated, the Operations Officer with the agreement of Treasurer may appoint a replacement.</p>
 					<br>
 			<a id="membership"><h3>2 Membership</h3></a>
 					<p>2.1 A member must be registered with a subsidiary group.</p>
 					<p>2.2 A member must pay dues to their subsidiary group, and their subsidiary group must remit 1/2 of those dues to the main group.</p>
 					<p>2.3 Dues are $12 for six months.</p>
 					<p>2.4 The Operations Officer, Assistant Operations Officer and Treasurer have their required dues waived for the duration of their six-month terms, although they are required to pay dues as normal in order to be eligible for re-election.</p>
 					<p>2.5 A member is defined as active if they have attended both at least one general membership meeting, and at least six meetings or functions of any kind of the group or any subsidiary groups, within the past six months.</p>
 					<p>2.6 The Operations Officer and Treasurer acting in agreement, or the Operations Officer and Adjudication Chief acting in agreement, may enact a suspension of any member for any duration, including one of indefinite duration.</p>
 					<p>2.7 The Operations Officer and Treasurer acting in agreement, or the Operations Officer and Adjudication Chief acting in agreement, may repeal any such suspension at any time; this includes suspensions imposed by other officers or by previous occupants of those offices.</p>
 					<p>2.8 Any member thus suspended may appeal their suspension at the next scheduled general membership meeting. Such an appeal is not subject to section 4.2.7 and may be voted on immediately. A simple majority vote of active members is sufficient to repeal a suspension, either at this meeting, or at any subsequent meeting where it has been introduced as an item to be voted on.</p>
 					<p>2.9 A suspended member shall forfeit any dues paid during the time of suspension and is liable to the group for assessments or fees as a result of obligations incurred by the member prior to suspension.</p>
 					<p>2.10 A suspended member shall be barred from participating in all group functions, including general membership meetings and any functions of subsidiary groups, with the exception of the right to appeal their suspension at the next general membership meeting after it is issued.</p>
 					<p>2.11 A suspended member shall have all privileges which have been suspended reinstated the first day after the suspension has concluded.</p>
 					<p>2.12 If necessary, the Treasurer and Adjudication Chief acting in agreement may suspend the Operations Officer, or may repeal a suspension they issued under this clause. This is otherwise identical to a suspension issued in agreement with the Operations Officer.</p>
 					<p>2.13 In the event a suspension is repealed, the decision of the officer(s) to repeal are to be ratified by voting members at the next Althing by simple majority vote.</p>
 					<br>
 			<a id="elections"><h3>3 Elections</h3></a>
 					<p>3.1 Elections for the offices of Operations Officer and Assistant Operations Officer shall be held every six months, within the third or fourth weekends of the months of February and August.</p>
 					<p>3.2 Elections for the office of Treasurer shall be held every six months, but staggered such that they occur midway between elections for the other offices.</p>
 					<p>3.3 Elections for other members of the Board of Directors will be held twice a year, with up to five seats being filled in an election held in January and up to four seats being filled in an election held in June. Members elected to the Board in this way will serve for a full year.</p>
 					<p>3.4 Candidates for the positions of Operations Officer and Assistant Operations Officer may be required to participate in a specific in-game event to be eligible.</p>
 					<p>3.5 Candidates for any position must dues paid active members (see above) at the time of election voting.</p>
 					<p>3.6 Candidates for any position must be at least 18 years of age.</p>
 					<p>3.7 No person may hold any of the following two positions at the same time: Operations Officer, Assistant Operations Officer, Treasurer.</p>
 					<p>3.8 Only active members (see above) may vote in elections.</p>
 					<p>3.9 Winning any election requires a simple plurality (more votes than any other vote-getter taken individually).</p>
 					<br>
 			<a id="meetings"><h3>4 Meetings</h3></a>
 				<a id="boardofdirectorsmeetings"><h4>4.1 Board of Directors Meetings</h4></a>
 					<p>4.1.1 The Board of Directors shall meet to discuss business as necessary.</p>
 					<p>4.1.2 Scheduled Board of Directors meetings may be closed to members not on the Board of Directors, but the minutes of such closed meetings must be made available to the general membership within four weeks of the meeting.</p>
 					<p>4.1.3 The Board of Directors will have no power to change, alter, or otherwise affect the bylaws and policies of the group or any aspect of gameplay.</p>
 				<a id="generalmembershipmeetings"><h4>4.2 General Membership Meetings</h4></a>
 					<p>4.2.1 A general membership meeting shall be scheduled once each month by the Operations Officer. Whether it is actually held is subject to group interest and involvement (i.e. - if no one has business to bring before the group, then there will be no meeting for that month).</p>
 					<p>4.2.2 Only active members (see above) may vote on group policies or changes to bylaws.</p>
 					<p>4.2.3 All votes of general membership meetings will require only a simple majority unless otherwise specified by the bylaws.</p>
 					<p>4.2.4 A vote of active members has the authority to amend the group bylaws.</p>
 					<p>4.2.5 A vote of active members has the authority to set policies and modify game documents, to explicitly include the group Policies and Kingdom Constitution documents.</p>
 					<p>4.2.6 A vote of active members may authorize an expenditure of any size from the group treasury.</p>
 					<p>4.2.7 Items put before the general membership for vote must be announced and opened for discussion for at least one general membership meeting and then tabled until the next general membership meeting for vote.</p>
 					<p>4.2.7.1 Exception: Emergency situations and fund expenditures may be discussed and voted upon at the same general membership meeting. An emergency situation will be defined as a situation that places the group into violation of law or any contractual agreement.</p>
 					<p>4.2.8 No issues voted on by the general membership may be brought up again before a general membership meeting for at least six months, unless said issue(s) put the group in a legal or contractual breach.</p>
 				<a id="subsidiarygroups"><h4>5 Subsidiary Groups</h4></a>
 					<p>5.1 Each subsidiary group must elect one of its members as representative.</p>
 					<p>5.2 Must sign the standard agreement with the central Amtgard Board of Directors.</p>
 					<p>5.3 Must be based at a physical location within 150 miles of Salem, Oregon.</p>
 					<p>5.4 To accept a new subsidiary group the following steps must be followed:</p>
 					<p>5.4.1 Approval of the Operations Officer and Treasurer.</p>
 					<p>5.4.2 Approval by a vote of active members at a general membership meeting.</p>
 					<p>5.4.3 Signing of the subsidiary group contract by both the Operations Officer and an appropriate representative of the subsidiary group (which must then be approved by the Board of Directors).</p>
 					<p>5.5 To remove a subsidiary group the following steps must be followed:</p>
 					<p>5.5.1 Approval of the Operations Officer and Treasurer.</p>
 					<p>5.5.2 Approval by a vote of active members at a general membership meeting.</p>
 					<p>5.5.3 The subsidiary group that is to be terminated or suspended must be notified at least 15 days prior to the vote for termination/suspension. They must be informed of the date, time and location of the general membership meeting where the vote will take place.</p>
 					<p>5.5.4 The representative in question will be allowed an opportunity to speak in their subsidiary group's defense, in person or in writing, at the general membership where the vote is to take place. Any other members of the subsidiary group who are present at the meeting will be given the opportunity to speak in its defense as well.</p>
 					<p>5.5.5 The effective date of the subsidiary group's removal from the group shall be at least one week after the date of the general membership meeting authorizing the removal.</p>
 					<p>5.5.6 Exception: failure of the subsidiary group to abide by the subsidiary group contract may be grounds for automatic removal of the group; such circumstances are to be reviewed by the Board of Directors.</p>
 					<p>5.6 Subsidiary groups may draft their own bylaws and policies so long as they do not conflict with the bylaws and policies of the group or the subsidiary group contract. They are very strongly encouraged to use the bylaws and policies of the group as model for their own governance.</p>
 					<p>5.7 Are obligated to provide accurate records of the attendance of their functions to the Treasurer. This shall be the responsibility of the subsidiary group's representative.</p>
 					<p>5.8 Subsidiary groups may not have their own subsidiary groups (however, see Subsidiary Group Confederations below).</p>
 					<p>5.9 Officers of subsidiary groups may not also serve as the main group's Operations Officer, Assistant Operations Officer, or Treasurer.</p>
 				<a id="subsidiarygroupsconfederations"><h4>6 Subsidiary Group Confederations</h4></a>
 					<p>6.1 Subsidiary group confederations are groups of subsidiary groups (sponsored by the main group) who have gained permission from the main group (through a vote at a general membership meeting) to be recognized as such.</p>
 					<p>6.2 Subsidiary group confederations are meant to act as semi-independent entities who are working towards independent main group status.</p>
 					<p>6.3 Must have achieved non-profit or not-for-profit status and keep it active.</p>
 					<p>6.4 Subsidiary group confederations are expected to maintain their own, separate, set of bylaws. These bylaws may specify details of membership, voting rights, and dues requirements specific to the subsidiary group confederation.</p>
 					<p>6.5 With the permission of the Operations Officer and the Treasurer, subsidiary group confederations may add independent groups to the subsidiary group confederation. These subsidiary groups may be required to sign any contracts the subsidiary group confederation requires.</p>
 					<p>6.6 In the case that the subsidiary group confederation becomes a fully independent main group, its component subsidiary groups will each independently decide whether they wish to join the new independent main group as subsidiary groups of its own, or remain as subsidiary groups of this group.</p>
 				<a id="independentsubsidiarygroups"><h4>7 Independent Subsidiary Groups</h4></a>
 					<p>7.1 Groups based at a physical location more than 150 miles away from Salem, Oregon are eligible to become Independent Subsidiary Groups.</p>
 					<p>7.2 Independent subsidiary groups are treated as normal subsidiary groups, with the following exceptions:</p>
 					<p>7.2.1 Members of independent subsidiary groups have no voting rights.</p>
 					<p>7.2.2 Independent subsidiary groups are not required to remit any portion of dues paid by their members.</p>
 				<a id="dissolution"><h4>8 Dissolution</h4></a>
 					<p>8.1 Should the group dissolve, all assets must be eliminated.</p>
 					<p>8.2 Assets may not be eliminated by distribution to group members.</p>
 					<p>8.3 Options for the elimination of assets include:</p>
 					<p>8.3.1 Donation to the federal government.</p>
 					<p>8.3.2 Donation to state or local governments.</p>
 					<p>8.3.3 Donation to a non-profit organization approved for exemption from federal tax under section 501(c)(3) of the Internal Revenue Code.</p>
<br>
<br>
<!-- Policies section-->
	<a id="policies"><h1 class="content">Policies</h1></a>
		<p>(The way we as a club plan to do things.)</p>
 				<br>
 			<a id="coreofficers"><h3>1 Core Officers</h3></a>
 				<a id="poloperationsofficer"><h4>1.1 Operations Officer</h4></a>
 					<p>1.1.1 Shall preside over and conduct all in-game ceremonies and functions. </p>
 					<p>1.1.2 Shall publish a schedule of group events for their term. It is recommended but not required that at least one event be scheduled with each subsidiary group per term. </p>
 					<p>1.1.3 May appoint, or defer to a vote at a general membership meeting, a Rules Representative. </p>
 				<a id="polassistantoperationsofficer"><h4>1.2 Assistant Operations Officer</h4></a>
 					<p>1.2.1 Responsible for the coronation feast at the end of their term.</p>
 				<a id="polfinancialofficer"><h4>1.3 Financial Officer</h4></a>
 					<p>1.3.1 Is responsible for collection of all fees and duties, including dues.</p>
 					<p>1.3.2 Will provide receipts for all payments received.</p>
 					<p>1.3.3 Will maintain accurate records of the group treasury.</p>
 					<p>1.3.3.1 Will conduct a financial audit, once every calendar year, for each Holding with the Holdings Chancellor.</p>
 					<p>1.3.3.2 If approved by majority vote of the BOD may conduct an additional financial audit if situations require.</p>
 					<p>1.3.4 Will maintain accurate records of all group income and expenditures.</p>
 					<p>1.3.5 Will publicly report the kingdom's financial status at least once every 3 months.</p>
 					<p>1.3.6 Will keep attendance records of all group functions.</p>
 					<p>1.3.7 Will keep minutes of general membership meetings.</p>
 				<a id="polboardofdirectors"><h4>1.5 Board of Directors</h4></a>
 					<p>1.5.1 Has the authority to veto any action by the group or its officers that would bring the group into violation of federal, state, or local law. </p>
 					<p>1.5.2 Has the authority to prohibit any activity by group members that would bring the group into violation of federal, state, or local law.</p>
 					<p>1.5.3 Has the authority to change the Registered Agent for the group or to otherwise adjust corporate information with the Oregon Justice department.</p>
 					<p>1.5.4 Shall have automatic permission for annual expenditures for maintaining a PO Box, fees for Incorporation renewal, and to pay any taxes for which the group may be liable.</p>
 					<p>1.5.5 Before these expenditures can be made the Board of Directors must meet to authorize them, and they must be made public in the minutes of the meeting in which they are authorized.</p>
 					<p>1.5.6 May authorize the Operations Officer to sign any legally binding contract or agreement that does not conflict with the group’s bylaws and policies.</p>
 					<p>1.5.7 Any exercise of these powers requires only a simple majority vote at a Board of Directors meeting.</p>
 			<a id="additionalofficers"><h3>2 Additional Officers</h3></a>
 				<a id="polsafetyofficer"><h4>2.1 Safety Officer</h4></a>
 					<p>2.1.1 Will be selected according to an in-game procedure, at the same time as the Operations Officer and Assistant Operations Officer are selected.</p>
 					<p>2.1.2 Must be an active dues paid member of at least 18 years of age.</p>
 					<p>2.1.3 May not also hold any of the following positions: Operations Officer, Assistant Operations Officer, Treasurer, Adjudication Chief.</p>
 					<p>2.1.4 Shall maintain a lost and found for the group.</p>
 					<p>2.1.5 Will check all play equipment for safety and legality.</p>
 					<p>2.1.6 Will organize games as necessary in the absence of previously scheduled games.</p>
 					<p>2.1.7 Shall relinquish the position if they miss more than two group functions in a row or more than three group functions total over course of their six-month term.</p>
 					<p>2.1.8 If, for whatever reason, the position of Safety Officer is vacated, the Operations Officer may appoint a replacement.</p>
 				<a id="poladjudicationchief"><h4>2.2 Adjudication Chief</h4></a>
 					<p>2.2.1 Shall be responsible for ensuring that game rules enforced fairly on the field.</p>
 					<p>2.2.2 Shall work with the Safety Officer in checking play equipment for safety and legality.</p>
 					<p>2.2.3 Will make sure there are an appropriate number of referees at all group games, and ensure that conduct of referees is competent and fair.</p>
 					<p>2.2.4 Will be the Operation's Officer advisor on the rules.</p>
 					<p>2.2.5 Is responsible for creating and administering tests to qualify as a referee.</p>
 				<a id="polquartermaster"><h4>2.3 Quartermaster</h4></a>
 					<p>2.3.1 Will be appointed by the joint agreement of the Operations Officer and the Treasurer.</p>
 					<p>2.3.2 Is responsible for holding onto and maintaining the property of the organization.</p>
 					<p>2.3.3 Upon appointment they will sign a contract which outlines the responsibilities, expectations, what they should do if they should vacate their position and their understanding of the financial liability of maintaining the organization's property.</p>
 					<p>2.3.4 Also known as Property Manager.</p>
 					<p>2.3.4.1 Property does not include the files which are maintained by the Treasurer.</p>
 					<p>2.3.4.2 Maintain a list of all propeprty that the organization owns and who is in possession of said property.</p>
 					<p>2.3.4.2 Maintain a safe location for all property what is not checked out to other persons.</p>
 					<p>2.3.4.3 Report to the Operations Officer and Treasurer any missing or damaged equipment.</p>
 					<p>2.3.4.4 Is responsible for transporting or making arrangemens for transport of property to requested organization events.</p>
 					<p>2.3.4.5 Maintain the trailer, keeping it in a working order.</p>
 					<p>2.3.4.6 Maintain a worklog on any maintenance</p>
 					<p>2.3.4.7 Maintain a travel checklist to ensure safety before and during travel.</p>
 			<a id="polls"><h3>3 Polls</h3></a>
 					<p>3.1 Group officers may run informational polls at their discretion in order to determine how best to serve the group.</p>
 					<p>3.2 These are not votes.</p>
 					<p>3.2.1 They do not have the authority granted to votes at general membership meetings.</p>
 					<p>3.2.2 They do not have any authority beyond advising group officers how to exercise the powers already granted to them.</p>
 					<p>3.3 Group officers may run them at their discretion, including or excluding inactive members, non dues paid members, non-members, or any other persons whose opinion they are interested in targeting.</p>
 			<a id="expenditures"><h3>4 Expenditures</h3></a>
 					<p>4.1 Certain officers are empowered by the bylaws to make expenditures from the group treasury.</p>
 					<p>4.2 Such expenditures must be tracked in the group's financial records and appropriate receipts must be provided.</p>
 					<p>4.3 Such expenditures must be publicly announced to the group's membership within two weeks of the date of the withdrawal of funds.</p>
 					<p>4.4 No officer has the authority to make any use of the group treasury unless explicitly granted such authority by the bylaws, and only to the extent granted to them by the bylaws.</p>
 			<a id="referees"><h3>5 Referees</h3></a>
 					<p>5.1 Must have passed a qualifying test administered by the Adjudication Chief with a score of 75% or better within the past six months.</p>
 					<p>5.2 Have unlimited authority over the conduct of gameplay, subject only to overrule by the Adjudication Chief.</p>
 					<p>5.3 Shall use this authority to ensure that games are:</p>
 					<p>5.3.1 Safe to all participants and bystanders.</p>
 					<p>5.3.2 Played honestly and in keeping with the spirit of the game rules.</p>
 			<a id="rulesrepresentative"><h3>6 Rules Representative</h3></a>
 					<p>6.1 Must be an active member of the group.</p>
 					<p>6.2 Responsible for collecting, collating, and reporting the group's wishes with respect to the Rules Revision Process.</p>
 			<a id="membership"><h3>7 Membership</h3></a>
 					<p>7.1 The Amtgard Code of Conduct as established in the rules of play and the Circle of Monarchs bylaws should be used as the policy to guide when it is appropriate for group officers to exercise their authority to suspend members.</p>
 					<p>7.2 Any indefinite suspension of a member will be reported to the Amtgard Circle of Monarchs.</p>
 			<a id="polgeneralmembershipmeetings"><h3>8 General Membership Meetings</h3></a>
 					<p>8.1 Anyone may attend a general membership meeting unless specifically barred.</p>
 					<p>8.2 Rules of order may be set by the Operations Officer. If so, their enforcement shall be the responsibility of the Safety Officer.</p>
 					<p>8.3 Any business brought before a general membership meeting to be discussed prior to a vote at the next meeting, must be presented in written form in the same wording intended to be used at the vote.</p>
 					<p>8.4 A vote of active members may order the Rules Representative to submit a clarification or revision to the Rules Revision Process.</p>
 					<p>8.5 Any proposed changes to the group bylaws or policies must come as either a request to Add, Delete or Modify a specific section of the bylaws or policies, and must include the following:</p>
 					<p>8.5.1 The line number of the item to be added, removed or modified.</p>
 					<p>8.5.2 The current text as written.</p>
 					<p>8.5.3 The proposed text addition, deletion, or modification.</p>
 			<a id="electioncycle"><h3>9 Election Cycle</h3></a>
 				<a id="crownqualifications"><h4>9.1 Crown Qualifications</h4></a>
 					<p>9.1.1 This event shall be held within the first or second week of February and August.</p>
 					<p>9.1.2 This event will be the responsibility of the highest ranking officer not running for Kingdom Office in the upcoming election. For purposes of this clause the officers are considered to have the following ranking:</p>
 					<p>9.1.2.1 Operations Officer</p>
 					<p>9.1.2.2 Assistant Operations Officer</p>
 					<p>9.1.2.3 Safety Officer</p>
 					<p>9.1.2.4 Adjudication Chief</p>
 					<p>9.1.2.5 Treasurer</p>
 					<p>9.1.3 This person is referred to as the "sponsor".</p>
 					<p>9.1.4 Anyone may enter the Crown Qualification event.</p>
 					<p>9.1.5 Those running for an office will be required to enter a minimum specified number of Crown Qualification cultural events, as set by the sponsor. (If no requirement is set, the requirement defaults to the requirement used in the previous Crown Qualifications.)</p>
 					<p>9.1.6 Multiple entries are allowed in a contest, but a single entry may not be entered in more than one contest.</p>
 					<p>9.1.7 Typical cultural skill contests include (but are NOT limited to): flat art, 3D art, heraldry, singing, instrumental music, factual writing, composition, weapon and shield construction, passive construction, court garb, fighting garb, strategic gaming, poetry, brewing and wine-making, etc.</p>
 					<p>9.1.8 Specific rules for these qualifications shall be put out by the sponsor at least six weeks prior to the date set for Crown Qualifications.</p>
 					<p>9.1.9 Those running for office must also pass a Reeve's test.</p>
 					<p>9.1.10 Those running for office must also pass a Corpora test.</p>
 				<a id="championstournament"><h4>9.2 Champion's Tournament</h4></a>
 					<p>9.2.1 Shall be held on the same day as elections for Operations Officer and Assistant Operations Officer.</p>
 					<p>9.2.2 Only those who qualified for office at the Crown Qualifications to be eligible to run for Safety Officer may participate in the Champion's Tournament.</p>
 					<p>9.2.3 The Champion's Tournament shall be a double-elimination open weapon tournament.</p>
 					<!--p>9.2.4 The winner shall hold the office of Safety Officer for the next six months.</p-->
 			<a id="subsidiarygroups"><h3>10 Subsidiary Groups</h3></a>
 					<p>10.1 Policies of the main group shall have precedence over policies of the subsidiary groups; subsidiary groups may not overrule policies set by a vote of active members at a general membership meeting.</p>
 					<p>10.2 Policies applicable to subsidiary groups shall not apply to independent subsidiary groups except where explicitly stated to.</p>
 					<p>10.3 Are entitled to the use of the group's non-profit numbers for requests deemed reasonable by the Board of Directors.</p>
 			<a id="events"><h3>11 Events</h3></a>
 					<p>11.1 Referees responsible for a tournament of any kind shall:</p>
 					<p>11.1.1 Report the overall winner to the Treasurer.</p>
 					<p>11.1.2 Report the winner, second place, and third place of each category to the Treasurer.</p>
 					<p>11.2 In addition, referees responsible for a combat tournament shall report any win streaks of 3 or more to the Treasurer.</p>
 					<p>11.3 Autocrats for all group-funded events will be responsible for the following:</p>
 					<p>11.3.1 Providing a copy of all sign-in sheets, which shall include the real name, character name, and attendance fees paid, for all attendees.</p>
 					<p>11.3.2 Providing receipts for all expenses.</p>
 					<p>11.3.3 Providing records for all income.</p>
 					<p>11.3.4 Providing all applicable tournament results and other gameplay related information of long-term importance.</p>
 				<a id="officialsponsoredannualevents"><h4>11.4 Official Sponsored Annual Events</h4></a>
 					<p>11.4.1 Certain annually held, group-funded campout events shall enjoy official group sponsorship and be subject to specific group policies to be outlined in this subsection.</p>
 					<p>11.4.2 Each such event shall have its funds maintained separately from all other group funds, in a separate bank account used solely for that purpose.</p>
 					<p>11.4.3 Those funds are not to be used for any group function, or any purpose, other than the specific event to which they are dedicated.</p>
 					<p>11.4.4 The Paypal account for the event, if one exists, will be linked to the event fund bank account and no other account, personal or otherwise.</p>
 					<p>11.4.5 Each event shall have a specified minimum balance which its funds are to maintain. If its fund's balance falls below that minimum, then profits realized by the event will be returned to that fund as necessary to bring it back to that minimum.</p>
 					<p>11.4.6 If profits realized by the event exceed the amount necessary to bring its fund back to its minimum balance, then any excess may be split between the event fund and the group's general treasury. How to split profits is left to a vote between the Operations Officer, Assistant Operations Officer, Treasurer and Safety Officer, and their decision must be ratified by a majority vote of active members at a general membership meeting.</p>
 					<p>11.4.7 In the event that such a ratification cannot be accomplished, the default shall be to transfer all excess profit to the kingdom general fund.</p>
 					<p>11.4.8 Such events will be run by the winners of a bidding process.</p>
 					<p>11.4.8.1 Any member of the group may submit a bid.</p>
 					<p>11.4.8.2 The Operations Officer, Assistant Operations Officer, Treasurer and Safety Officer have authority to set the administrative procedures of the bidding process in any way that does not conflict with the group bylaws and policies.</p>
 					<p>11.4.8.3 Winners of the bidding process should be determined by joint agreement of the Operations Officer, Assistant Operations Officer, Treasurer and Safety Officer.</p>
 					<p>11.4.8.4 In the event no bid can achieve a plurality of approval between these four officers, the Operations Officer shall have final choice.</p>
 					<p>11.4.8.5 In the event there were no bidders the person who will run the event will be determined by joint agreement of the Operations Officer, Assistant Operations Officer, Treasurer and Safety Officer (with the Operations Officer having authority to break any tie).</p>
 					<p>11.4.9 All expenditures for the event will be paid for by check(s) made out to the specific business(es) for services, goods, and fees outlined in the event bid.</p>
 					<p>11.4.10 Any expenditure beyond what is covered in the event bid requires a request in writing and authorization by majority vote of the Operations Officer, Assistant Operations Officer, Treasurer, Safety Officer, and Adjudication Chief.</p>
 					<p>11.4.11 The member running the event shall be legally responsible for the income and expenditures of the event and may be held liable for repayment if a discrepancy is found in the event's financial records.</p>
 					<p>11.4.12 All such events will be insured. The member running the event is responsible for providing proof of the event's insurance to the Board of Directors.</p>
 					<p>11.4.13 Changes to this subsection and all subsections thereof may only be made by a supermajority vote of 2/3 of the active members voting.</p>
 					<p>11.4.14 Event Bid Procedures</p>
 					<p>11.4.14.1 All bids and proposals must include the following information: Site, Crat Team, Projected Attendance, Budget, Feast, Warskill Events, Arts & Sciences Events, and Gate Schedule.</p>
 					<p>11.4.14.1.2.1 Autocrat: Responsible for overseeing all event functions and for interfacing with the Operations Officer and/or BOD.</p>
 					<p>11.4.14.1.2.2 Gate-crat: Responsible for collecting fees, maintaning entrance records, and setting and maintaining personnel for gate shifts.</p>
 					<p>11.4.14.1.2.3 Guard-crat: Responsible for setting and maintaining event security and handling issues that impact the safety and security of attendants.</p>
 					<p>11.4.14.1.2.4 War-crat: Responsible for hosting battlegames and tournaments during the course of the event. Responsible for securing reeves for the battlegames and tournaments. Responsible for ensuring water and cups are available at battlegames and tournaments.</p>
 					<p>11.4.14.1.2.5 Trash-crat/Clean-up Crew: Responsible for collecting trash from the various camp areas and providing trash bags to the camping areas. Responsible for ensuring that the bathrooms are stocked with supplies. Shall assist the various crats in cleaning up their areas.</p>
 					<p>11.4.14.1.3 The following positions are optional: Feast-crat, Med-crat/team, A&S-crat.</p>
 					<p>11.4.14.1.3.1 Feast-crat: Responsible for hosting and providing a feast on the Saturday night of the event. A proposal for the feast should include a menu, a list of supplies required (cooking vessels, serving utensils, etc.), and a plan for staff and support (cooks, servers, cleanup crew, etc.). If other meals are planned by groups, they should be mentioned in the bid including if the meals are donated or offered on a purchase basis. This also includes any food vendors who may wish to attend the event.</p>
 					<p>11.4.14.1.3.2 Med-crat/team: Responsible for setting and maintaining a medical pavilion for minor injuries and issues. Responsible for having a direct line to mundania if more serious medical issues arise. Head medical person(s) must be a certified medical professional and copies of certification/licensure must be filed with the Blackspire BOD. Event Crat will decide what level of certification/licensure is required based on the event.</p>
 					<p>11.4.14.1.3.3 A&S-crat: Responsible for organizing and hosting arts and sciences events, such as ithras, classes, competitions, tournaments, stitch-ins, etc. This position may be filled or delegated by the Blackspire Assistant Operations Officer. The Kingdom of Blackspire wants to promote arts and sciences events for attendees who do not participate in warskill events. All bids and proposals should include a list and schedule of Amtgard- centric A&S events. These should be relevant to the period Amtgard portrays as a medieval-and fantasy-based game. Appropriate A&S events include, but are not limited to: ithras, classes, forums, demonstrations, competitions, and bardics. Proposals should include a budget and supply list for items required to make A&S events run smoothly. A list of necessary personnel positions should be identified.</p>
 					<p>11.4.14.1.4 Attendance: Proposals should start with a minimum expected attendance. Proposals must include a plan for gate vouchers/waivers for expected Kingdom Monarchs and Kingdom Regents likely to attend. Proposals should also include a plan for promoting attendance.</p>
 					<p>11.4.14.1.5 Budget: All bids and proposals must provide a budget and delineate expected costs. The budget needs to provide a breakdown of costs, including but not limited to: site rental, food, additional amenities, expenditures for promoting warskill and A&S events, and prize support. The budget should also include proposed gate fees and repayment schedule of all Blackspire monies used. Autocrats may be asked to sign and file a fiduciary agreement before funds will be released.</p>
 					<p>1.4.14.1.6 Warskill: All proposals should include multiple warskill events for, at minimum, Saturday of the event. PacWar should have multiple events over multiple days. All proposals should include a full schedule of tournaments and battlegames to be hosted over the course of the event. Proposals should include a budget and supply list for items required to make games and tournaments run smoothly. A list of necessary personnel positions, to include team captains and reeves, should be identified.</p>
 					<p>11.4.14.1.7 Gate: All bids and proposals should include a tentative schedule for gate shifts, rules and regulations for gate personnel, and a proposed supply list of items required to run gate. If no supplies are needed, that should be noted in the proposal.</p>
 					<p>11.4.14.1.8 Additional Support: Proposals may include event favors, cups, T-shirts, or other memorabilia.</p>
 					<p>11.4.14.2 A financial breakdown must be provided in the proposed budget.</p>
 					<p>11.4.14.3 Bids for Blackspire events are submitted to the Operations Officer.</p>
 				<a id="pacwar"><h4>11.5 PacWar</h4></a>
 					<p>11.5.1 PacWar is an officially sponsored group campout event governed by the policies of the subsection 11.4</p>
 					<p>11.5.2 A minimum balance of $2500 shall be maintained in the PacWar account.</p>
 					<p>11.5.3 The PacWar autocrat will have access to a $100 cash fund for small necessary purchases. Receipts need to be obtained for all purchases with this fund and provided to the Treasurer within one week from the end of the event.</p>
 					<p>11.5.4 The bidding process for PacWar will be open from the first day after the latest PacWar ends to Dec 1st of that same year. The group officers will review the bids and will announce their decision of who won the bidding process by Jan 1st of the next year.</p>
 					<p>11.5.5 Changes to this subsection and all subsections thereof may only be made by a supermajority vote of 2/3 of the active members voting.</p>
 				<a id="winterbash"><h4>11.6 Winterbash</h4></a>
 					<p>11.6.1 Winterbash is an officially sponsored group campout event governed by the policies of subsection 11.4</p>
 					<p>11.6.2 A minimum balance of $2000 shall be maintained in the Winterbash account.</p>
 					<p>11.6.3 The fund held in reserve for Winterbash must first be used to secure the site before it may be used on any other expense for the event.</p>
 					<p>11.6.4 The bidding process for Winterbash will start on March 1st, 10 months prior to the Winterbash which is being bid on. Bids will be accepted from March 1st through May 31st.</p>
 					<p>11.6.5 The winning bid will be announced no later than June 30th.</p>
 					<p>11.6.6 Changes to this subsection and all subsections thereof may only be made by a supermajority vote of 2/3 of the active members voting.</p>
 			<a id="polmiscellaneous"><h3>12 Miscellaneous</h3></a>
 				<a id="infractionsheet"><h4>12.1 Infraction Sheet</h4></a>
 					<p>12.1.1 For previous offenses against the group please the Infraction Sheet.</p>
 					<p>12.1.2 The Infraction Sheet will include real name, character name at time of the infraction, offense, punishment meted, and other notes such as how often the issue may be revisited, or if the punishment has been altered between the date first issued to the present day.</p>

 </div>
</div>
		
		
	</body>
 
</html>

<?php } ?>