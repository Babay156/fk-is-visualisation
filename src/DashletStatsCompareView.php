<?php
class DashletStatsCompareView{
	private $sValue;
	private $iDeltaValue;
	private $sTitle;
	private $sClass;
	private $sFilter;

	/**
	 * DashletGroupByPlusView constructor.
	 *
	 * @param $sTitle
	 * @param $sValue
	 * @param $iDeltaValue
	 * @param $sClass
	 * @param $sFilter
	 */
	public function __construct($sTitle, $sValue, $iDeltaValue, $sClass, $sFilter) 
	{
		$this->sValue = $sValue;
		$this->iDeltaValue = $iDeltaValue;
		$this->sTitle = $sTitle;
		$this->sClass = $sClass;
		$this->sFilter = $sFilter;
	}
	public function Display($oPage, $sDashletId, $bEditMode)
	{
		
		$sHtmlTitle = $this->sTitle;
		$sHtmlValue = $this->sValue;
		$sHtmlIconUrl = MetaModel::GetClassIcon($this->sClass);
		$sLinkUrl = utils::GetAbsoluteUrlAppRoot()."pages/UI.php?operation=search&filter=".$sFilter = rawurlencode($this->sFilter->serialize());
		
		$sDeltaIcon = ($this->iDeltaValue > 0 ? '<span class="fk-is-dashlet-compare-stats--delta fk-is-dashlet-compare-stats--delta-positive"><i class="fas fa-arrow-up"></i>'.$this->iDeltaValue.'</span>'
			: '<span class="fk-is-dashlet-compare-stats--delta fk-is-dashlet-compare-stats--delta-negative"><i class="fas fa-arrow-down"></i>'.$this->iDeltaValue.'</span>');
		$oPage->add(
<<<HTML
<div id="$sDashletId" class="dashlet-content fk-is-dashlet-stats">
	<a href="$sLinkUrl">
	<div class="fk-is-dashlet-stats--icon">
		$sHtmlIconUrl
	</div>
	<div class="fk-is-dashlet-stats--details">
		<h2 class="fk-is-dashlet-stats--details--title">$sHtmlTitle</h2>
		<div class="fk-is-dashlet-stats--details--value">$sHtmlValue $sDeltaIcon</div>
	</div>
	</a>
</div>
HTML
		);

	}


}