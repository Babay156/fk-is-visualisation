<?php
class DashletStatsView{
	private $sValue;
	private $sTitle;
	private $sShortName;
	private $sColor;
	private $sClass;
	private $sFilter;

	/**
	 * DashletGroupByPlusView constructor.
	 *
	 * @param $sTitle
	 * @param $sShortName
	 * @param $sColor
	 * @param $sValue
	 * @param $sClass
	 * @param $sFilter
	 */
	public function __construct($sTitle, $sShortName, $sColor, $sValue, $sClass, $sFilter) 
	{
		$this->sValue = $sValue;
		$this->sTitle = $sTitle;
		$this->sShortName = $sShortName;
		$this->$sColor = $sColor;
		$this->sClass = $sClass;
		$this->sFilter = $sFilter;
	}
	public function Display($oPage, $sDashletId, $bEditMode)
	{
		
		$sHtmlTitle = $this->sTitle;
		$sHtmlShortName = $this->sShortName;
		$sHtmlColor = $this->sColor;
		$sHtmlValue = $this->sValue;
		$sHtmlClass = $this->$sClass;
		$sLinkUrl = utils::GetAbsoluteUrlAppRoot()."pages/ajax.render.php?operation=dashboard&class=InformationSystem&id=142&attcode=dashboard;
		$oPage->add(
<<<HTML
<div id="$sDashletId" class="dashlet-content fk-is-dashlet-$sHtmlShortName">
	<a href="$sLinkUrl">
	<div class="fk-is-dashlet-stats--details--value">$sHtmlValue</div>
	<div class="fk-is-dashlet-stats--details--shortname">$sHtmlShortName</div>
	<div class="fk-is-dashlet-stats--details--title">$sHtmlTitle</div>
	</a>
</div>
HTML
		);
	}
}

https://itop.half-path.ru/pages/ajax.render.php?operation=dashboard&class=InformationSystem&id=142&attcode=dashboard