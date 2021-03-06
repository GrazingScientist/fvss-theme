{**
 * templates/frontend/components/footer.tpl
 *
 * Copyright (c) 2014-2017 Simon Fraser University
 * Copyright (c) 2003-2017 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @brief Common site frontend footer.
 *
 * @uses $isFullWidth bool Should this page be displayed without sidebars? This
 *       represents a page-level override, and doesn't indicate whether or not
 *       sidebars have been configured for thesite.
 *}

	</div><!-- pkp_structure_main -->

	{* Sidebars *}
	{if empty($isFullWidth)}
		{call_hook|assign:"sidebarCode" name="Templates::Common::Sidebar"}
		{if $sidebarCode}
			<div class="pkp_structure_sidebar left" role="complementary" aria-label="{translate|escape key="common.navigation.sidebar"}">
				{$sidebarCode}
			</div><!-- pkp_sidebar.left -->
		{/if}
	{/if}
</div><!-- pkp_structure_content -->

<div id="pkp_content_footer" class="pkp_structure_footer_wrapper" role="contentinfo">

	<div class="pkp_structure_footer">
		<div class="pkp_footer_content">
			<div>{$pageFooter}</div>
			<div id=acknowledgments>
				<div id=hosted_by>
					Hosted by<br>
					<a href="http://www.ub.uni-frankfurt.de/">
						<img id=footer_ublogo src="{$baseUrl}/plugins/themes/ub-ojs-theme/images/ublogo_transparent.png" />
					</a>
				</div>
				<div id=powered_by>
					<a href="{url page="about" op="aboutThisPublishingSystem"}" target="_blank">
						<img src="{$baseUrl}/{$brandImage}" />
					</a>
				</div>
			</div>
			
		</div>

	</div>

</div><!-- pkp_structure_footer_wrapper -->

</div><!-- pkp_structure_page -->

{load_script context="frontend"}

{call_hook name="Templates::Common::Footer::PageFooter"}
</body>
</html>
