<?php
class TreeNode{
    public $data = null;
    public $children = [];
    public function __construct(int $data)
    {   
        $this->data = $data;
    }

    public function addChildren(TreeNode $node)
    {
        $this->children[] = $node;
    }
}

class DFS{
    public $visited = null;

    public function __construct(){
        $this->visited = new SplQueue;
    }

    public function search(TreeNode $nodes, $needle=null)
    {
        $this->visited->enqueue($nodes);
        $current = $this->visited;
        if($nodes->children){
            foreach($nodes->children as $child){
                $this->search($child);
            }
        }
    }

    public function display()
    {
       while(!$this->visited->isEmpty()){
            echo $this->visited->dequeue()->data.'<br>';
       }
    }
}

try{
    $node = new TreeNode(6);
    $node1 = new TreeNode(3);
    $node2 = new TreeNode(14);
    $node->addChildren($node1);
    $node->addChildren($node2);
    $node3 = new TreeNode(1);
    $node4 = new TreeNode(5);
    $node5 = new TreeNode(7);
    $node6 = new TreeNode(18);
    $node1->addChildren($node3);
    $node1->addChildren($node4);
    $node2->addChildren($node5);
    $node2->addChildren($node6);
    $node7 = new TreeNode(2);
    $node8 = new TreeNode(4);
    $node9 = new TreeNode(9);
    $node10 = new TreeNode(23);
    $node3->addChildren($node7);
    $node4->addChildren($node8);
    $node5->addChildren($node9);
    $node6->addChildren($node10);
    
    $dfs = new DFS;
    $dfs->search($node,2);
    $dfs->display();
}catch(Exception $e){
    echo $e->getMessage();
}