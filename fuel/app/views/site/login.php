<div class="container">
	<div class="top">
		<?= Asset::img('logos/cs_black_logo_2014.png', array('class'=>'cs_logo')); ?><br/>
	</div>
	<div id="login" class="inline">
		<div class="container inline">
			<?= Form::open('login'); ?>
				<input class="input" type="text" name="name" placeholder="Username or Email" />
				<input class="input" type="password" name="password" placeholder="Password" />
				<input class="submit" type="submit" name="login" value="Log in" />
				<p>---------- or ----------</p>
				<?= Html::anchor('http://carlossang.com/register', 'Register'); ?>
			<?= Form::close(); ?>
		</div>
	</div>
</div>