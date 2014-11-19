<?php
class SparkPlug implements Visitable {
	public function acceptEngineVisitor(EngineVisitor $visitor) {
		$visitor->visitSparkPlug($this);
	}
}
?>