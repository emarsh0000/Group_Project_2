require 'test_helper'

class MainControllerTest < ActionController::TestCase
  test "should get result" do
    get :result
    assert_response :success
  end

end
