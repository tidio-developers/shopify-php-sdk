<?php

namespace Robwittman\Shopify\Service;

use Robwittman\Shopify\Object\Comment;

class CommentService extends AbstractService
{
    /**
     * Receive a list of all comments
     *
     * @link   https://help.shopify.com/api/reference/comment#index
     * @param  array $params
     * @return Comment[]
     */
    public function all(array $params = [])
    {
        $endpoint = 'comments.json';
        $response = $this->request($endpoint, 'GET', $params);
        return $this->createCollection(Comment::class, $response['comments']);
    }

    /**
     * Receive a count of all comments
     *
     * @link   https://help.shopify.com/api/reference/comment#count
     * @param  array $params
     * @return integer
     */
    public function count(array $params = [])
    {
        $endpoint = 'comments/count.json';
        $response = $this->request($endpoint, 'GET', $params);
        return $response['count'];
    }

    /**
     * Receive a single comment
     *
     * @link   https://help.shopify.com/api/reference/comment#show
     * @param  integer $commentId
     * @param  array   $params
     * @return Comment
     */
    public function get($commentId, array $params = [])
    {
        $endpoint = 'comments/'.$commentId.'.json';
        $response = $this->request($endpoint, 'GET', $params);
        return $this->createObject(Comment::class, $response['comment']);
    }

    /**
     * Create a new comment
     *
     * @link   https://help.shopify.com/api/reference/comment#create
     * @param  Comment $comment
     * @return void
     */
    public function create(Comment &$comment)
    {
        $data = $comment->exportData();
        $endpoint = 'comments.json';
        $response = $this->request(
            $endpoint, 'POST', array(
            'comment' => $data
            )
        );
        $comment->setData($response['comment']);
    }

    /**
     * Modify an existing comment
     *
     * @link   https://help.shopify.com/api/reference/comment#update
     * @param  Comment $comment
     * @return void
     */
    public function update(Comment &$comment)
    {
        $data = $comment->exportData();
        $endpoint = 'comments/'.$comment->id.'.json';
        $response = $this->request(
            $endpoint, 'PUT', array(
            'comment' => $data
            )
        );
        $comment->setData($response['comment']);
    }

    /**
     * Mark comment as spam
     *
     * @link   https://help.shopify.com/api/reference/comment#spam
     * @param  Comment $comment
     * @return void
     */
    public function spam(Comment &$comment)
    {
        $endpoint = 'comments/'.$comment->id.'/spam.json';
        $response = $this->request($endpoint, 'POST');
        $comment->setData($response['comment']);
    }

    /**
     * Unmark as spam
     *
     * @link   https://help.shopify.com/api/reference/comment#not_spam
     * @param  Comment $comment
     * @return void
     */
    public function notSpam(Comment &$comment)
    {
        $endpoint = 'comments/'.$comment->id.'/not_spam.json';
        $response = $this->request($endpoint, 'POST');
        $comment->setData($response['comment']);
    }

    /**
     * Approve a comment
     *
     * @link   https://help.shopify.com/api/reference/comment#approve
     * @param  Comment $comment
     * @return void
     */
    public function approve(Comment &$comment)
    {
        $endpoint = 'comments/'.$comment->id.'/approve.json';
        $response = $this->request($endpoint, 'POST');
        $comment->setData($response['comment']);
    }

    /**
     * Remove a comment
     *
     * @link   https://help.shopify.com/api/reference/comment#remove
     * @param  Comment $comment
     * @return void
     */
    public function remove(Comment &$comment)
    {
        $endpoint = 'comments/'.$comment->id.'remove.json';
        $response = $this->request($endpoint, 'POST');
        $comment->setData($response['comment']);
    }

    /**
     * Restore a comment
     *
     * @link   https://help.shopify.com/api/reference/comment#restore
     * @param  Comment $comment
     * @return void
     */
    public function restore(Comment &$comment)
    {
        $endpoint = 'comments/'.$comment->id.'/restore.json';
        $response = $this->request($endpoint, 'POST');
        $comment->setData($response['comment']);
    }
}
