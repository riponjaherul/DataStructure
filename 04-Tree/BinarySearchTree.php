<?php
/**
 * Create Tree Structure Class with nodes
 */
class BinarySearchTreeStructure{
    public $data = null;
    public $parent = null;
    public $left = null;
    public $right = null;
    public function __construct(int $data=null,BinarySearchTreeStructure $parent=null){
        $this->data = $data;
        $this->parent = $parent;
    }   

    /**
     * Get maximum value
     */
    public function max(){
        $node = $this;
        while($node->right){
            $node = $node->right;
        }
        return $node;
    }

    /**
     * Get minimum value
     */
    public function min(){
        $node = $this;
        while($node->left){
            $node = $node->left;
        }
        return $node;
    }

    /**
     * Get maximum Predecessor Node
     */
    public function maxPredecessor(){
        $node = $this;
        if($node->left){
            return $node->left->max();
        }
        return null;
    }

    /**
     * Get minimum Successor Node
     */
    public function minSuccessor(){
        $node = $this;
        if($node->right){
            return $node->right->min();
        }
        return null;
    }

    /**
     * Delete selected Node
     */
    public function delete(){
        if(!$this->left && !$this->right){
            if($this->parent->left===null){
                $this->parent->right = null;
            }else{
                $this->parent->left===null;
            }
        }elseif($this->left && $this->right){
            #----Get Most Predecessor Node and Delete
            $maxPredecessor = $this->maxPredecessor();
            $this->data = $maxPredecessor->data;
            $maxPredecessor->delete();
            #-------OR------------------------------
            #----Get Min Successor Node and Delete
            $minSuccessor = $this->minSuccessor();
            $this->data = $minSuccessor->data;
            $minSuccessor->delete();
        }elseif($this->left){
            if($this->parent->left === $this){
                $this->parent->left = $this->left;
                $this->left->parent = $this->parent;
            }else{
                $this->parent->right = $this->left;
                $this->left->parent = $this->parent;
            }
            $this->left = null;
            $this->parent = null;
        }elseif($this->right){
            if($this->parent->left===$this){
                $this->parent->left = $this->right;
                $this->right->parent = $this->parent;
            }else{
                $this->parent->right = $this->right;
                $this->right->parent = $this->parent;
            }
            $this->right = null;
            $this->parent = null;
        }
    }
}

class BinarySearchTree{
    public $tree = null;

    public function isEmpty(){
        return $this->tree===null;
    }

    /**
     * Insert an Item 
     * Parameter : integer data
     */
    public function insert(int $data){
        if($this->isEmpty()){
            $this->tree = new BinarySearchTreeStructure($data);
            return $this->tree;
        }

        $node = $this->tree;
        while($node){
            if($data < $node->data){
                if($node->left){
                    $node = $node->left;
                }else{
                    $node->left = new BinarySearchTreeStructure($data,$node);
                    break;
                }
            }elseif($data > $node->data){
                if($node->right){
                    $node = $node->right;
                }else{
                    $node->right = new BinarySearchTreeStructure($data,$node);
                    break;
                }
            }else {
                break;
            }
        }
        return $this->tree;
    }

    /**
     * Search specific Node by data
     * Parameter : data
     */
    public function search(int $data){
        $node = $this->tree;
        while($node){
            if($node->data===$data){
                return $node;
            }
            if($data < $node->data){
                $node = $node->left;
            }elseif($data > $node->data){
                $node = $node->right;
            }else{
                break;
            }
        }
        return null;
    }

    /**
     * Inorder(Left,Root,Right) sorting as Like Acending Sorting
     * Parameter : Node
     */
    public function inOrderTraverse(BinarySearchTreeStructure $node){
        if($node->left) $this->inOrderTraverse($node->left);
        echo $node->data.'<br>';
        if($node->right) $this->inOrderTraverse($node->right);
    }

    /**
     * Preorder(Root,Left,Right) sorting
     * Parameter : Node
     */
    public function preOrderTraverse(BinarySearchTreeStructure $node){
        echo $node->data.'<br>';
        if($node->left) $this->preOrderTraverse($node->left);
        if($node->right) $this->preOrderTraverse($node->right);
    }

    /**
     * Postorder(Left,Right,Root) sorting
     * Parameter : Node
     */
    public function postOrderTraverse(BinarySearchTreeStructure $node){
        if($node->left) $this->postOrderTraverse($node->left);
        if($node->right) $this->postOrderTraverse($node->right);
        echo $node->data.'<br>';
    }

    /**
     * Remove selected Node
     * Parameter : int Data
     */
    public function remove(int $data){
        $node = $this->search($data);
        if($node) $node->delete();
    }
}