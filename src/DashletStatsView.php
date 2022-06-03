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
	 * @param $sValue
	 * @param $sClass
	 * @param $sFilter
	 */
	public function __construct($sTitle, $sColor, $sShortName, $sValue, $sClass, $sFilter) 
	{
		$this->sValue = $sValue;
		$this->sTitle = $sTitle;
		$this->sShortName = $sShortName;
		$this->$sColor = $sColor
		$this->sClass = $sClass;
		$this->sFilter = $sFilter;
	}
	public function Display($oPage, $sDashletId, $bEditMode)
	{
		
		$sHtmlTitle = $this->sTitle;
		$sHtmlShortName = $this->sShortName;
		$sHtmlColor = $this->sColor;
		$sHtmlValue = $this->sValue;
		$sHtmlIconUrl = MetaModel::GetClassIcon($this->sClass);
		$sLinkUrl = utils::GetAbsoluteUrlAppRoot()."pages/UI.php?operation=search&filter=".$sFilter = rawurlencode($this->sFilter->serialize());
		$oPage->add(
<<<HTML
<div id="$sDashletId" style="border: 4px solid $sHtmlColor !important" class="dashlet-content fk-is-dashlet-stats">
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