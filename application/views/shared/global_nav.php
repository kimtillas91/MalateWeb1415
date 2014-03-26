	<div class="global_nav">
		<div class="row">
			<div class="small-3 medium-3 large-2 columns">
				<a class="logo global" href="http://www.malateliteraryfolio.org/"></a>
			</div>
			<div class="small-9 medium-9 large-10 columns">
				<div class="row malate">
					<span class="largefont">malate</span>
					<span class="smallfont">LITERARY FOLIO</span>
				</div>
				<div class="row">
					<div class="small-3 medium-3 large-2 columns">
						<?php echo anchor('#', 'ABOUT', 
											'class="global_nav" data-dropdown="hover1" data-options="is_hover:true"') ?>
							<ul id="hover1" class="f-dropdown" data-dropdown-content>
								<li><?php echo anchor('#', 'History') ?></li>
								<li><?php echo anchor('#', 'Editorial Board') ?></li>
								<li><?php echo anchor('#', 'The Organization') ?></li>
								<li><?php echo anchor('#', 'The Publication') ?></li>
								<li><?php echo anchor('#', 'Membership') ?></li>
							</ul>
					</div>
					<div class="small-3 medium-3 large-2 columns">
						<?php echo anchor('pahina/view/folios', 'FOLIOS', array('class' => 'global_nav')) ?>
					</div>
					<div class="small-3 medium-3 large-2 columns">
						<?php echo anchor('#', 'EVENTS', 
											'class="global_nav" data-dropdown="hover1" data-options="is_hover:true"') ?>
							<ul id="hover1" class="f-dropdown" data-dropdown-content>
								<li><?php echo anchor('#', 'Ang Reinkarnasyon ng Salita') ?></li>
								<li><?php echo anchor('#', 'The Lilt and the Verve') ?></li>
								<li><?php echo anchor('#', 'Malate Convention for the Arts') ?></li>
								<li><?php echo anchor('#', 'Book Launches') ?></li>
								<li><?php echo anchor('#', 'Poetry Nights') ?></li>
							</ul>
					</div>
					<div class="small-3 medium-3 large-2 columns end">
						<?php echo anchor('pahina/view/contacts', 'CONTACTS', array('class' => 'global_nav')) ?>
					</div>
				</div>
			</div>
		</div>
	</div>