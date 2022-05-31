<?php
class DashletStatsView{
	private $sValue;
	private $sTitle;
	private $sShortName;
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
	public function __construct($sTitle, $sShortName, $sValue, $sClass, $sFilter) 
	{
		$this->sValue = $sValue;
		$this->sTitle = $sTitle;
		$this->sSjortName = $sShortName;
		$this->sClass = $sClass;
		$this->sFilter = $sFilter;
	}
	public function Display($oPage, $sDashletId, $bEditMode)
	{
		
		$sHtmlTitle = $this->sTitle;
		$sHtmlShortName = $this->sShortName;
		$sHtmlValue = $this->sValue;
		$sHtmlIconUrl = MetaModel::GetClassIcon($this->sClass);
		$sLinkUrl = utils::GetAbsoluteUrlAppRoot()."pages/UI.php?operation=search&filter=".$sFilter = rawurlencode($this->sFilter->serialize());
		$oPage->add(
<<<HTML
<div id="$sDashletId" class="dashlet-content fk-is-dashlet-stats">
	<a href="$sLinkUrl">
	<div class="fk-is-dashlet-stats--icon">
		$sHtmlIconUrl
	</div>
	<div class="fk-is-dashlet-stats--details">
		<h2 class="fk-is-dashlet-stats--details--title">$sHtmlTitle</h2>
		<h2 class="fk-is-dashlet-stats--details--title">$sHtmlShortName</h2>
		<div class="fk-is-dashlet-stats--details--value">$sHtmlValue</div>
	</div>
	</a>
</div>
HTML
		);

	}


}