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

class BFS{
    public function search(TreeNode $nodes,int $needle=null)
    {
        $queue = new SplQueue;
        $visited = new SplQueue;
        $queue->enqueue($nodes);
        while(!$queue->isEmpty()){
            $current = $queue->dequeue();
            $visited->enqueue($current);
            if($current->data==$needle){
                return $visited;
            }
            foreach($current->children as $child){
                $queue->enqueue($child);
            }
        }
        return $visited;
    }
    
    public function display(SplQueue $nodes)
    {
       while(!$nodes->isEmpty()){
            echo $nodes->dequeue()->data.'<br>';
       }
    }
}

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

$bfs = new BFS;
$visited = $bfs->search($node,7);
$bfs->display($visited);