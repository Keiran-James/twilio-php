<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Tests\Integration\FlexApi\V1;

use Twilio\Exceptions\DeserializeException;
use Twilio\Exceptions\TwilioException;
use Twilio\Http\Response;
use Twilio\Serialize;
use Twilio\Tests\HolodeckTestCase;
use Twilio\Tests\Request;

class InsightsQuestionnairesTest extends HolodeckTestCase {
    public function testCreateRequest(): void {
        $this->holodeck->mock(new Response(500, ''));

        $options = ['token' => "token", ];

        try {
            $this->twilio->flexApi->v1->insightsQuestionnaires->create("name", $options);
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}

        $values = ['Name' => "name", ];

        $headers = ['Token' => "token", ];

        $this->assertRequest(new Request(
            'post',
            'https://flex-api.twilio.com/v1/Insights/QM/Questionnaires',
            [],
            $values,
            $headers
        ));
    }

    public function testCreateResponse(): void {
        $this->holodeck->mock(new Response(
            201,
            '
            {
                "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "id": "73e92a9e-9bdb-11ed-a8fc-0242ac120002",
                "name": "abc",
                "description": "description",
                "active": false,
                "questions": [
                    {
                        "question": "What is the total time",
                        "description": "time spent",
                        "category": {
                            "category_id": "7eda3164-9bdb-11ed-a8fc-0242ac120002",
                            "category_name": "test cat"
                        },
                        "question_id": "88ef95fe-9bdb-11ed-a8fc-0242ac120002",
                        "answer_set_id": "a6a8a54f-5305-4aec-b92c-a6e429932f58",
                        "allow_na": false,
                        "usage": 0
                    },
                    {
                        "question": "What is the total time",
                        "description": "time spent",
                        "category": {
                            "category_id": "7eda3164-9bdb-11ed-a8fc-0242ac120002",
                            "category_name": "test cat"
                        },
                        "question_id": "8ffe9944-9bdb-11ed-a8fc-0242ac120002",
                        "answer_set_id": "a6a8a54f-5305-4aec-b92c-a6e429932f58",
                        "allow_na": false,
                        "usage": 0
                    }
                ],
                "url": "https://flex-api.twilio.com/v1/Insights/QM/Questionnaires/73e92a9e-9bdb-11ed-a8fc-0242ac120002"
            }
            '
        ));

        $actual = $this->twilio->flexApi->v1->insightsQuestionnaires->create("name");

        $this->assertNotNull($actual);
    }

    public function testReadRequest(): void {
        $this->holodeck->mock(new Response(500, ''));

        $options = ['token' => "token", ];

        try {
            $this->twilio->flexApi->v1->insightsQuestionnaires->read($options);
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}

        $headers = ['Token' => "token", ];

        $this->assertRequest(new Request(
            'get',
            'https://flex-api.twilio.com/v1/Insights/QM/Questionnaires',
            [],
            [],
            $headers
        ));
    }

    public function testReadEmptyResponse(): void {
        $this->holodeck->mock(new Response(
            200,
            '
            {
                "questionnaires": [],
                "meta": {
                    "page": 0,
                    "page_size": 50,
                    "first_page_url": "https://flex-api.twilio.com/v1/Insights/QM/Questionnaires?IncludeInactive=True&PageSize=50&Page=0",
                    "previous_page_url": null,
                    "url": "https://flex-api.twilio.com/v1/Insights/QM/Questionnaires?IncludeInactive=True&PageSize=50&Page=0",
                    "next_page_url": null,
                    "key": "questionnaires"
                }
            }
            '
        ));

        $actual = $this->twilio->flexApi->v1->insightsQuestionnaires->read();

        $this->assertNotNull($actual);
    }

    public function testReadFullResponse(): void {
        $this->holodeck->mock(new Response(
            200,
            '
            {
                "questionnaires": [
                    {
                        "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                        "id": "73e92a9e-9bdb-11ed-a8fc-0242ac120002",
                        "name": "abc",
                        "description": "description",
                        "active": false,
                        "questions": [
                            {
                                "question": "What is the total time",
                                "description": "time spent",
                                "category": {
                                    "category_id": "7eda3164-9bdb-11ed-a8fc-0242ac120002",
                                    "category_name": "test cat"
                                },
                                "question_id": "88ef95fe-9bdb-11ed-a8fc-0242ac120002",
                                "answer_set_id": "a6a8a54f-5305-4aec-b92c-a6e429932f58",
                                "allow_na": false,
                                "usage": 0
                            },
                            {
                                "question": "What is the total time",
                                "description": "time spent",
                                "category": {
                                    "category_id": "7eda3164-9bdb-11ed-a8fc-0242ac120002",
                                    "category_name": "test cat"
                                },
                                "question_id": "8ffe9944-9bdb-11ed-a8fc-0242ac120002",
                                "answer_set_id": "a6a8a54f-5305-4aec-b92c-a6e429932f58",
                                "allow_na": false,
                                "usage": 0
                            }
                        ],
                        "url": "https://flex-api.twilio.com/v1/Insights/QM/Questionnaires/73e92a9e-9bdb-11ed-a8fc-0242ac120002"
                    },
                    {
                        "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                        "id": "4b33600f-8064-4c93-88a2-ba116c2300c8",
                        "name": "abc",
                        "description": "description",
                        "active": true,
                        "questions": [
                            {
                                "question": "What is the total time",
                                "description": "time spent",
                                "category": {
                                    "category_id": "7eda3164-9bdb-11ed-a8fc-0242ac120002",
                                    "category_name": "test cat"
                                },
                                "question_id": "88ef95fe-9bdb-11ed-a8fc-0242ac120002",
                                "answer_set_id": "a6a8a54f-5305-4aec-b92c-a6e429932f58",
                                "allow_na": false,
                                "usage": 0
                            },
                            {
                                "question": "What is the total time",
                                "description": "time spent",
                                "category": {
                                    "category_id": "7eda3164-9bdb-11ed-a8fc-0242ac120002",
                                    "category_name": "test cat"
                                },
                                "question_id": "8ffe9944-9bdb-11ed-a8fc-0242ac120002",
                                "answer_set_id": "a6a8a54f-5305-4aec-b92c-a6e429932f58",
                                "allow_na": false,
                                "usage": 0
                            }
                        ],
                        "url": "https://flex-api.twilio.com/v1/Insights/QM/Questionnaires/4b33600f-8064-4c93-88a2-ba116c2300c8"
                    }
                ],
                "meta": {
                    "first_page_url": "https://flex-api.twilio.com/v1/Insights/QM/Questionnaires?IncludeInactive=True&PageSize=50&Page=0",
                    "key": "questionnaires",
                    "next_page_url": null,
                    "page": 0,
                    "page_size": 50,
                    "previous_page_url": null,
                    "url": "https://flex-api.twilio.com/v1/Insights/QM/Questionnaires?IncludeInactive=True&PageSize=50&Page=0"
                }
            }
            '
        ));

        $actual = $this->twilio->flexApi->v1->insightsQuestionnaires->read();

        $this->assertGreaterThan(0, \count($actual));
    }

    public function testReadActiveQuestionnairesResponse(): void {
        $this->holodeck->mock(new Response(
            200,
            '
            {
                "questionnaires": [
                    {
                        "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                        "id": "4b33600f-8064-4c93-88a2-ba116c2300c8",
                        "name": "efg",
                        "description": "description",
                        "active": true,
                        "questions": [
                            {
                                "question": "What is the total time",
                                "description": "time spent",
                                "category": {
                                    "category_id": "7eda3164-9bdb-11ed-a8fc-0242ac120002",
                                    "category_name": "test cat"
                                },
                                "question_id": "88ef95fe-9bdb-11ed-a8fc-0242ac120002",
                                "answer_set_id": "a6a8a54f-5305-4aec-b92c-a6e429932f58",
                                "allow_na": false,
                                "usage": 0
                            },
                            {
                                "question": "What is the total time",
                                "description": "time spent",
                                "category": {
                                    "category_id": "7eda3164-9bdb-11ed-a8fc-0242ac120002",
                                    "category_name": "test cat"
                                },
                                "question_id": "8ffe9944-9bdb-11ed-a8fc-0242ac120002",
                                "answer_set_id": "a6a8a54f-5305-4aec-b92c-a6e429932f58",
                                "allow_na": false,
                                "usage": 0
                            }
                        ],
                        "url": "https://flex-api.twilio.com/v1/Insights/QM/Questionnaires/4b33600f-8064-4c93-88a2-ba116c2300c8"
                    }
                ],
                "meta": {
                    "first_page_url": "https://flex-api.twilio.com/v1/Insights/QM/Questionnaires?PageSize=50&Page=0",
                    "key": "questionnaires",
                    "next_page_url": null,
                    "page": 0,
                    "page_size": 50,
                    "previous_page_url": null,
                    "url": "https://flex-api.twilio.com/v1/Insights/QM/Questionnaires?PageSize=50&Page=0"
                }
            }
            '
        ));

        $actual = $this->twilio->flexApi->v1->insightsQuestionnaires->read();

        $this->assertNotNull($actual);
    }

    public function testUpdateRequest(): void {
        $this->holodeck->mock(new Response(500, ''));

        $options = ['token' => "token", ];

        try {
            $this->twilio->flexApi->v1->insightsQuestionnaires("id")->update(True, $options);
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}

        $values = ['Active' => Serialize::booleanToString(True), ];

        $headers = ['Token' => "token", ];

        $this->assertRequest(new Request(
            'post',
            'https://flex-api.twilio.com/v1/Insights/QM/Questionnaires/id',
            [],
            $values,
            $headers
        ));
    }

    public function testUpdateResponse(): void {
        $this->holodeck->mock(new Response(
            200,
            '
            {
                "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "id": "4b33600f-8064-4c93-88a2-ba116c2300c8",
                "name": "abc",
                "description": "description",
                "active": true,
                "questions": [
                    {
                        "question": "What is the total time",
                        "description": "time spent",
                        "category": {
                            "category_id": "7eda3164-9bdb-11ed-a8fc-0242ac120002",
                            "category_name": "test cat"
                        },
                        "question_id": "88ef95fe-9bdb-11ed-a8fc-0242ac120002",
                        "answer_set_id": "a6a8a54f-5305-4aec-b92c-a6e429932f58",
                        "allow_na": false,
                        "usage": 0
                    },
                    {
                        "question": "What is the total time",
                        "description": "time spent",
                        "category": {
                            "category_id": "7eda3164-9bdb-11ed-a8fc-0242ac120002",
                            "category_name": "test cat"
                        },
                        "question_id": "8ffe9944-9bdb-11ed-a8fc-0242ac120002",
                        "answer_set_id": "a6a8a54f-5305-4aec-b92c-a6e429932f58",
                        "allow_na": false,
                        "usage": 0
                    }
                ],
                "url": "https://flex-api.twilio.com/v1/Insights/QM/Questionnaires/4b33600f-8064-4c93-88a2-ba116c2300c8"
            }
            '
        ));

        $actual = $this->twilio->flexApi->v1->insightsQuestionnaires("id")->update(True);

        $this->assertNotNull($actual);
    }

    public function testDeleteRequest(): void {
        $this->holodeck->mock(new Response(500, ''));

        $options = ['token' => "token", ];

        try {
            $this->twilio->flexApi->v1->insightsQuestionnaires("id")->delete($options);
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}

        $headers = ['Token' => "token", ];

        $this->assertRequest(new Request(
            'delete',
            'https://flex-api.twilio.com/v1/Insights/QM/Questionnaires/id',
            [],
            [],
            $headers
        ));
    }

    public function testDeleteResponse(): void {
        $this->holodeck->mock(new Response(
            204,
            null
        ));

        $actual = $this->twilio->flexApi->v1->insightsQuestionnaires("id")->delete();

        $this->assertTrue($actual);
    }

    public function testFetchRequest(): void {
        $this->holodeck->mock(new Response(500, ''));

        $options = ['token' => "token", ];

        try {
            $this->twilio->flexApi->v1->insightsQuestionnaires("id")->fetch($options);
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}

        $headers = ['Token' => "token", ];

        $this->assertRequest(new Request(
            'get',
            'https://flex-api.twilio.com/v1/Insights/QM/Questionnaires/id',
            [],
            [],
            $headers
        ));
    }

    public function testFetchResponse(): void {
        $this->holodeck->mock(new Response(
            200,
            '
            {
                "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "id": "73e92a9e-9bdb-11ed-a8fc-0242ac120002",
                "name": "efg",
                "description": "description",
                "active": true,
                "questions": [
                    {
                        "question": "What is the total time",
                        "description": "time spent",
                        "category": {
                            "category_id": "7eda3164-9bdb-11ed-a8fc-0242ac120002",
                            "category_name": "test cat"
                        },
                        "question_id": "88ef95fe-9bdb-11ed-a8fc-0242ac120002",
                        "answer_set_id": "a6a8a54f-5305-4aec-b92c-a6e429932f58",
                        "allow_na": false,
                        "usage": 0
                    },
                    {
                        "question": "What is the total time",
                        "description": "time spent",
                        "category": {
                            "category_id": "7eda3164-9bdb-11ed-a8fc-0242ac120002",
                            "category_name": "test cat"
                        },
                        "question_id": "8ffe9944-9bdb-11ed-a8fc-0242ac120002",
                        "answer_set_id": "a6a8a54f-5305-4aec-b92c-a6e429932f58",
                        "allow_na": false,
                        "usage": 0
                    }
                ],
                "url": "https://flex-api.twilio.com/v1/Insights/QM/Questionnaires/73e92a9e-9bdb-11ed-a8fc-0242ac120002"
            }
            '
        ));

        $actual = $this->twilio->flexApi->v1->insightsQuestionnaires("id")->fetch();

        $this->assertNotNull($actual);
    }
}