<?php

namespace Database\Seeders;

use App\Models\Skill;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SkillsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $skills = [
            'javascript',
            'php',
            'python',
            'github',
            'docker',
            'django',
            'html',
            'css',
            'react',
            'vue.js',
            'laravel',
            'node.js',
            'typescript',
            'java',
            'c++',
            'c#',
            'ruby',
            'aws',
            'azure',
            'google cloud',
            'sql',
            'nosql',
            'rest api',
            'graphql',
            'redux',
            'sass',
            'less',
            'bootstrap',
            'tailwind css',
            'express.js',
            'flask',
            'spring',
            'android',
            'ios',
            'unity',
            'unreal engine',
            'git',
            'svn',
            'agile methodology',
            'scrum',
            'kanban',
            'continuous integration',
            'continuous deployment',
            'test-driven development',
            'machine learning',
            'deep learning',
            'data science',
            'natural language processing',
            'computer vision',
            'blockchain',
            'cryptocurrency',
            'ethereum',
            'solidity',
            'web3.js',
            'decentralized finance',
            'smart contracts',
        ];


        foreach ($skills as $skill) {
            Skill::create(['name' => $skill]);
        }
    }
}
