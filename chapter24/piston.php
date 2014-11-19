<?php
class Piston implements Visitable {
	public function acceptEngineVisitor(EngineVisitor $visitor) {
		$visitor->visitPiston($this);
	}
}
?>