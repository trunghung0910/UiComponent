<?php
 
namespace AHT\Hung\Controller\Adminhtml\Post;
 
use AHT\Hung\Model\PostFactory;
use Magento\Backend\App\Action;
 
/**
 * Class Save
 * @package AHT\Hung\Controller\Adminhtml\Post
 */
class Save extends Action
{
    /**
     * @var PostFactory
     */
    private $postFactory;
 
    /**
     * Save constructor.
     * @param Action\Context $context
     * @param PostFactory $postFactory
     */
    public function __construct(
        Action\Context $context,
        PostFactory $postFactory
    ) {
        parent::__construct($context);
        $this->postFactory = $postFactory;
    }
 
    public function execute()
    {
        $data = $this->getRequest()->getPostValue();
        $id = !empty($data['hung_id']) ? $data['hung_id'] : null;
 
        $newData = [
            'name' => $data['name'],
            'content' => $data['content'],
        ];
 
        $post = $this->postFactory->create();
 
        if ($id) {
            $post->load($id);
        }
        try {
            if (isset($data['image']) && is_array($data['image'])) {
                $strpos = strpos($data['image'][0]['url'],'/media/');
                $data['image'][0]['url'] = substr($data['image'][0]['url'],$strpos + 6);
                $data['image'][0]['url'] = trim($data['image'][0]['url'],'/');
                $newData['image'] = json_encode($data['image']);
            }
            
            $post->addData($newData);
            $post->save();
            $this->messageManager->addSuccessMessage(__('You saved the post.'));
        } catch (\Exception $e) {
            $this->messageManager->addErrorMessage(__($e->getMessage()));
        }
 
        return $this->resultRedirectFactory->create()->setPath('hung/post/index');
    }
}