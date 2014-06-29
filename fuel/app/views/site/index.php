	<div class="container">
		<div class="top">
			<?= Asset::img('logos/cs_black_logo_2014.png', array('class'=>'cs_logo')); ?><br/>
			<?= Asset::img('logos/carlossang_black_logo_2014.png', array('class'=>'carlossang_logo')); ?>
		</div>
		<div id="resume" class="inline">
			<h1>Résumé</h1>
			<div class="skills inline">
				<h2>Skills</h2>
				<ul>
					<li>HTML5</li>
					<li>CSS3</li>
					<li>SASS</li>
					<li>Compass</li>
					<li>JavaScript</li>
					<li>jQuery</li>
					<li>PHP</li>
					<li>CFML</li>
					<li>MySQL</li>
					<li>CMS</li>
					<li>MVC</li>
					<li>Responsive Design</li>
					<li>Mobile Design</li>
				</ul>
			</div>
			<div class="software inline">
				<h2>Software</h2>
				<ul>
					<li>Adobe Photoshop</li>
					<li>Adobe Illustrator</li>
					<li>Adobe Dreamweaver</li>
					<li>Adobe Edge Inspect</li>
					<li>Adobe InDesign</li>
					<li>Adobe Premiere</li>
					<li>Adobe Audition</li>
					<li>iMovie</li>
					<li>Microsoft Word</li>
					<li>Microsoft Powerpoint</li>
					<li>Sequel Pro</li>
					<li>Sublime Text</li>
				</ul>
			</div>
			<div class="academic inline">
				<h2>Academic Experience</h2>
				<ul>
					<li>Designing Computer Graphics</li>
					<li>Web Interface and Usability</li>
					<li>Object Oriented Programming</li>
					<li>Scripting for Web Applications</li>
					<li>Database Structures</li>
					<li>Server-side Languages</li>
					<li>Rich Media Optimization</li>
					<li>Mobile Device Deployment</li>
				</ul>
			</div>
			<div class="industry inline">
				<h2>Industry Experience</h2>
				<ul>
					<a href="https://github.com/csang/carsignite"><li>Carsignite</li></a>
					<a href="https://github.com/csang/props"><li>Props</li></a>
					<a href="https://github.com/csang/myStudent"><li>myStudent</li></a>
					<a href="https://github.com/csang/panoramicam"><li>Panoramicam</li></a>
				</ul>
			</div>
			<div class="languages inline">
				<h2>Languages</h2>
				<ul>
					<li>English</li>
					<li>Español</li>
				</ul>
			</div>
			<div class="education inline">
				<h2>Education</h2>
				<ul>
					<li>University: Full Sail University</li>
					<li>Degree: Web Design &amp; Development</li>
					<li>Class: 2013</li>
					<li>Honor: Valedictorian</li>
					<li>Bachelor's degree: Computer Science</li>
				</ul>
			</div>
		</div>
		<div id="portfolio">
			<h1>Portfolio</h1>
			<div class='websites'>
				<h2>Websites</h2>
				<div class='list'>
					<div class='site'>
						<h3><?= Html::anchor('http://carsignite.com', 'carsignite.com'); ?></h3>
						<?= Asset::img('websites/carsignite.png'); ?>
					</div>
					<div class='site'>
						<h3><?= Html::anchor('http://lauragguzman.com', 'lauragguzman.com'); ?></h3>
						<?= Asset::img('websites/lauragguzman.png'); ?>
					</div>
					<div class='site'>
						<h3><?= Html::anchor('https://github.com/csang/props', 'props (github)'); ?></h3>
						<?= Asset::img('websites/props.png'); ?>
					</div>
					<div class='site'>
						<h3><?= Html::anchor('https://github.com/csang/myStudent', 'myStudent (github)'); ?></h3>
						<?= Asset::img('websites/mystudent.png'); ?>
					</div>
				</div>
			</div>
			<!-- <div class='apps'>
				<h2>Apps</h2>
				<div class='list'>
					
				</div>
			</div> -->
		</div>
		<div id="contact">
			<h1>Contact</h1>
			<?= Form::open('send'); ?>
			<input class="input" type="text" name="name" placeholder="Name" />
			<input class="input" type="email" name="email" placeholder="Email" />
			<textarea rows="15" name="message" placeholder="Message" maxlength="1000"></textarea>
			<input class="submit" type="submit" name="send" value="SEND" />
			<?= Form::close(); ?>
		</div>
	</div>
	<div class='social_box'>
		<div class="social_links">
			<div class="social f">
				<?= Html::anchor('https://www.facebook.com/csangchino11', Asset::img('s_logos/f_logo.png')); ?>
			</div>
			<div class="social t">
				<?= Html::anchor('https://twitter.com/CarlosSang', Asset::img('s_logos/t_logo.png')); ?>
			</div>
			<div class="social g">
				<?= Html::anchor('https://plus.google.com/+CarlosSang', Asset::img('s_logos/g_logo.png')); ?>
			</div>
			<div class="social i">
				<?= Html::anchor('http://instagram.com/carlossang11', Asset::img('s_logos/i_logo_2.png')); ?>
			</div>
			<div class="social li">
				<?= Html::anchor('http://www.linkedin.com/in/csang/', Asset::img('s_logos/li_logo_2.png')); ?>
			</div>
			<div class="social gh">
				<?= Html::anchor('http://github.com/csang', Asset::img('s_logos/gh_mark.png')); ?>
			</div>
		</div>
	</div>